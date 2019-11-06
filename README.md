## SESSION配置储存在redis上
1. 修改php.ini的配置
```ini
session.save_handler = redis
session.save_path = "tcp://127.0.0.1:6379?auth=xxxxx"
```
2. 在页面中直接使用session就可自动保存到redis中