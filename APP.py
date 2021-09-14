import socket
import time

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
print('Socket created!!!')

s.bind(('localhost', 8080))

s.listen(3)
print('Waiting for connections')

while True:
    c, c_addr = s.accept()
    print('Connected with ', c_addr)
    c.send(bytes('A command issued in server side: to be executed in client side', 'utf-8'))
    print("CONNECTION FROM:", str(c_addr))
    c.send(b"Connected to Server")
    currentTime = time.ctime(time.time()) + "\r\n"
    c.send(currentTime.encode('ascii'))
    c.close()
