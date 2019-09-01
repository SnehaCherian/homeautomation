import time
import serial
import MySQLdb
import datetime
obj=serial.Serial('COM3',9600)
time.sleep(2)
while(True):
 con=MySQLdb.connect("localhost","root","","silpa")
 cur=con.cursor()
 cur.execute("select * from devices")
 t=[list(row) for row in cur.fetchall()]
 print t
 r=str(datetime.datetime.now().time())
 l=r.split(':')
 if(t[0][2]=="" and t[0][3]==""):
    if(t[0][1]=="ON"):
        obj.write('1')
        print '1'
        time.sleep(1)
    else:
        obj.write('0')
        print '0'
        time.sleep(1)
 else:
    x1,y1=t[0][2].split(':')
    a1,b1=t[0][3].split(':')
    if(t[0][1]=="ON" or ((x1<=l[0] and y1<=l[1])or(x1!=l[0] and y1>l[1])) and ((l[0]<=a1 and l[1]<b1)or(l[0]<a1 and l[1]>b1))):
       obj.write('1')
       print '1'
       time.sleep(1)
    else:
       obj.write('0')
       print '0'
       time.sleep(1)

 if(t[1][2]=="" and t[1][3]==""):
    if(t[1][1]=="ON"):
        obj.write('1')
        print '1'
        time.sleep(1)
    else:
        obj.write('0')
        print '0'
        time.sleep(1)
 else:
    x2,y2=t[1][2].split(':')
    a2,b2=t[1][3].split(':')
    if(t[1][1]=="ON" or ((x2<=l[0] and y2<=l[1])or(x2!=l[0] and y2>l[1])) and ((l[0]<=a2 and l[1]<b2)or(l[0]<a2 and l[1]>b2))):
       obj.write('1')
       print '1'
       time.sleep(1)
    else:
       obj.write('0')
       print '0'
       time.sleep(1)

       
 if(t[2][2]=="" and t[2][3]==""):
    if(t[2][1]=="ON"):
        obj.write('1')
        print '1'
        time.sleep(1)
    else:
        obj.write('0')
        print '0'
        time.sleep(1)
 else:
    x3,y3=t[2][2].split(':')
    a3,b3=t[2][3].split(':')
    if(t[2][1]=="ON" or ((x3<=l[0] and y3<=l[1])or(x3!=l[0] and y3>l[1])) and ((l[0]<=a3 and l[1]<b3)or(l[0]<a3 and l[1]>b3))):
       obj.write('1')
       print '1'
       time.sleep(1)
    else:
       obj.write('0')
       print '0'
       time.sleep(1)



 if(t[3][2]=="" and t[3][3]==""):
    if(t[3][1]=="ON"):
        obj.write('1')
        print '1'
        time.sleep(1)
    else:
        obj.write('0')
        print '0'
        time.sleep(1)
 else:
    x4,y4=t[3][2].split(':')
    a4,b4=t[3][3].split(':')
    if(t[3][1]=="ON" or ((x4<=l[0] and y4<=l[1])or(x4!=l[0] and y4>l[1])) and ((l[0]<=a4 and l[1]<b4)or(l[0]<a4 and l[1]>b4))):
        obj.write('1')
        print '1'
        time.sleep(1)
    else:
        obj.write('0')
        print '0'
        time.sleep(1)
    
 time.sleep(5)
 cur.close()
 con.close()
obj.close()

      
