char num[4];
void setup() {
  // put your setup code here, to run once:
  
pinMode(11,OUTPUT);
pinMode(4,OUTPUT);
pinMode(3,OUTPUT);
pinMode(13,OUTPUT);

digitalWrite(13,LOW); 
digitalWrite(4,LOW); 
digitalWrite(11,LOW); 
digitalWrite(3,LOW);  
Serial.begin(9600);
delay(1000);
}



void loop() {
  
 
 
 while(Serial.available()==4){
    num[0]=Serial.read();
    num[1]=Serial.read();
    num[2]=Serial.read();
    num[3]=Serial.read();
    
 }
if(num[0]=='1'){
digitalWrite(11,HIGH);}
else{
digitalWrite(11,LOW);}
if(num[1]=='1'){
digitalWrite(4,HIGH);}
else{
digitalWrite(4,LOW);}
if(num[2]=='1'){
digitalWrite(3,HIGH);}
else{
digitalWrite(3,LOW);}
if(num[3]=='1'){
digitalWrite(13,HIGH);}
else{
digitalWrite(13,LOW); }
}
