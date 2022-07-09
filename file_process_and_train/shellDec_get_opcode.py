import os
import re
import subprocess
import pickle

def get_file_opcode(fp):
    php_vld_cmd =  f'D:/phpstudy_pro/Extensions/php/php7.3.4nts/php.exe -dvld.active=1 -dvld.execute=0 -dvld.dump_paths=0 -f {fp}'
    php_vld_cmd = php_vld_cmd.split(' ')

    try:
        raw_out = subprocess.check_output(php_vld_cmd,
            stderr=subprocess.STDOUT)
        opcodes = re.findall(r'\*       (\b[A-Z_]+\b) ', raw_out.decode())
        return ' '.join(opcodes)
    except Exception as e:
        import traceback
        traceback.print_exc()
        print(fp, raw_out)
        return None


def extract_opcodes(ind, outp):
    g = os.walk(ind)
    result = []
    count = 0

    for path, dir_list, file_list in g:
        for fn in file_list:
            fp = os.path.join(ind, fn)
            try:
                opcode_str = get_file_opcode(fp)
                if opcode_str:
                    if count % 4 == 0:
                        result.append(opcode_str)
                    count += 1
                    print(count, fn, len(opcode_str))
            except Exception as e:
                import traceback
                traceback.print_exc()
                print(f'[!] {fp} error occurs!')
                pass

    with open(outp, 'wb') as f:
        pickle.dump(result, f)
        print(f'[^] {ind} {str(count//3)} php opcodes dump to {outp} !')


if __name__ == "__main__":
    extract_opcodes('..\\data\\B', '..\\data\\whitefile_opcode.pckle')
    extract_opcodes('..\\data\\M', '..\\data\\webshell_opcode.pckle')