--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/hlalanathi.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/hlalanathi.com-bytes_log
documentroot: /home/uxqveunr/public_html
group: uxqveunr
hascgi: 0
homedir: /home/uxqveunr
ip: 129.232.242.194
owner: root
phpopenbasedirprotect: 1
phpversion: inherit
port: 80
scriptalias: 
  - 
    path: /home/uxqveunr/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@hlalanathi.com
serveralias: mail.hlalanathi.com www.hlalanathi.com
servername: hlalanathi.com
ssl: 1
usecanonicalname: 'Off'
user: uxqveunr
userdirprotect: ''
