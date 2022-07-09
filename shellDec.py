"""
Usage:
    shellDec.py (-f|--file) <file_path>
    shellDec.py (-d|--dir) <dir_path>
    shellDec.py (-h|--help)


Options:
    -h --help       帮助
    -f --file       指定文件路径
    -d --dir        指定目录批量扫描


"""
import os
import re
import subprocess
from sys import argv
from docopt import docopt
import warnings
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfTransformer
from mlxtend.classifier import StackingCVClassifier
from mlxtend.feature_selection import ColumnSelector
from sklearn.pipeline import make_pipeline
from sklearn.tree import DecisionTreeClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.linear_model import LogisticRegression
from sklearn.svm import SVC
from sklearn import model_selection
import pickle
import joblib

#from lib.config import *
from rich.console import Console

console = Console()
print = console.print

def get_file_opcode(fp):
    #php_vld_cmd = ['php', '-dvld.active=1', '-dvld.execute=0', '-dvld.dump_paths=0', '-f', fp]
    php_vld_cmd =  f'D:/phpstudy_pro/Extensions/php/php7.3.4nts/php.exe -dvld.active=1 -dvld.execute=0 -dvld.dump_paths=0 -f {fp}'
    php_vld_cmd = php_vld_cmd.split(' ')

    try:
        raw_out = subprocess.check_output(php_vld_cmd,
                                          stderr=subprocess.STDOUT)
        opcodes = re.findall(r'\*       (\b[A-Z_]+\b) ', raw_out.decode())
        return [' '.join(opcodes)]
    except Exception as e:
        import traceback
        traceback.print_exc()
        # print(fp, raw_out)
        return None


def extract_opcodes_for_detect(ind, verberos=False):
    g = os.walk(ind)
    fps = []
    bad_file = []
    opcodes = []
    count = 0

    for path, dir_list, file_list in g:
        for fn in file_list:
            if not fn.lower().endswith('.php'):
                bad_file.append(fp)

            fp = os.path.join(path, fn)
            try:
                opcode_str = get_file_opcode(fp)
                if opcode_str:
                    fps.append(fp)
                    opcodes.append(opcode_str[0])
                    count += 1
                    if verberos:
                        print(count, fn, len(opcode_str))
                    print(f'> {fp}\'s Opcode extract successfully!')
                else:
                    bad_file.append(fp)
            except Exception as e:
                import traceback
                traceback.print_exc()
                # print(f'[!] {fp} error occurs!')
                pass

    if count == 0:
        return None, None

    return fps, opcodes, bad_file


def get_feature_for_detect(opcodes):
    with warnings.catch_warnings():
        warnings.simplefilter("ignore")
        with open('.\\data\\CoVec.pkl', 'rb') as f: covec = pickle.load(f)
        with open('.\\data\\transformer.pkl', 'rb') as f: transformer = pickle.load(f)

    covec_mat = covec.transform(opcodes).toarray()
    tfidf_mat = transformer.transform(covec_mat).toarray()

    return tfidf_mat


def detect_from_single_file(fp):
    opcode = get_file_opcode(fp)
    if opcode:
        x_detect = get_feature_for_detect(opcode)
        detect_model = joblib.load('.\\data\\stacking.model')
        y_pre = detect_model.predict(x_detect)
        if y_pre == 1:
            print("[bold green]***result***:{} is a webshell !!!".format(fp))
        else:
            print("[bold green]***result***:{} is a normal file !!!".format(fp))
        return 0
    else:
        print("[bold green]Can't get opcode of file:{}".format(fp))
        return -1


def detect_sample_dir(ind):
    with console.status("[bold green]Extracting PHP File's OPCode Now...") as status:
        fps, opcodes, bad_file = extract_opcodes_for_detect(ind)

    if not fps: return {}

    print('[yellow3]All file processed!')
    if bad_file:
        for file in bad_file:
            print("warning：{} can't get opcode!!!".format(file))
    x_detect = get_feature_for_detect(opcodes)
    detect_model = joblib.load('.\\data\\stacking.model')
    y_pred = detect_model.predict(x_detect)
    result = dict(zip(fps, y_pred))
    for key, value in result.items():
        if value == 1:
            print("[bold green]***result***:{} is a webshell !!!".format(key))
        else:
            print("[bold green]***result***:{} is a normal file !!!".format(key))
    print('[green]Dectection Finished!!!')


if __name__ == "__main__":
    args = docopt(__doc__)
    if args.get("-h") or args.get("--help"):
        print(__doc__)
    elif args.get("-f") or args.get("--file"):
        if args.get("<file_path>"):
            detect_from_single_file(args.get("<file_path>"))
        else:
            print("Please enter file path.")
            print(__doc__)
    elif args.get("-d") or args.get("--dir"):
        if args.get("<dir_path>"):
            detect_sample_dir(args.get("<dir_path>"))
        else:
            print("Please enter dir path.")
            print(__doc__)
    else:
        print("Wrong args!")
        print(__doc__)
