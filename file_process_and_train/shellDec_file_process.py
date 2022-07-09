import os
import re
import shutil
import hashlib
import subprocess

def get_php_file(ind, outd):#文件过滤
    if not os.path.exists(outd):
        os.makedirs(outd)
    count = 0
    for path, dir_list, file_list in os.walk(ind):
        for fn in file_list:
            if re.search(r'.*\.php', fn, re.IGNORECASE):
                fp = os.path.join(path, fn)
                count += 1
                print(fp)
                with open(fp, 'rb') as f:
                    fdata = f.read()
                fmd5 = hashlib.md5(fdata).hexdigest()
                nfn = fmd5 + '.php'
                nfp = os.path.join(outd, nfn)
                try:
                    shutil.copyfile(fp, nfp)
                except IOError as e:
                    import traceback
                    traceback.print_exc()
    print(count)


def pick_file(ind):
    php_vld_cmd = 'D:/phpstudy_pro/Extensions/php/php7.3.4nts/php.exe -d vld.active=1 -d vld.execute=0 -f {}'
    count = 0

    g = os.walk(ind)

    def _exec(cmd):

        if type(cmd) != 'list':
            cmd = cmd.split(' ')

        try:
            subprocess.check_output(cmd,stderr=subprocess.STDOUT)

            #if len(output) >= 100000:
             #   os.remove(cmd[-1])
              #  return 'delete'

        except subprocess.CalledProcessError as e:
            print("Error: %s" % e)
            os.remove(cmd[-1])
            return 'delete'
        return 'keep'

    for path, dir_list, file_list in g:
        for fn in file_list:
            fp = os.path.join(ind, fn)
            try:
                cmd = php_vld_cmd.format(fp)
                print(count, cmd, _exec(cmd))
                count += 1
            except IOError as e:
                import traceback
                traceback.print_exc()


if __name__ == "__main__":
    get_php_file('..\\data\\whitefile', '..\\data\\B')
    pick_file('..\\data\\B')
    get_php_file('..\\data\\webshell', '..\\data\\M')
    pick_file('..\\data\\M')
