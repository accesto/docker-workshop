FROM firecyberice/whalesay:latest

ADD fortune.sh /usr/bin/
RUN chmod +x /usr/bin/fortune.sh

ENTRYPOINT /usr/bin/fortune.sh | cowsay