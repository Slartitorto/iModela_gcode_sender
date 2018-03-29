# iModela_gcode_sender
Upload these files into the doc_root of a Raspberry with apache server and connect the Raspberry to Roland iModela CNC with USB<BR>
This project is based on Blueimp <a href="https://github.com/blueimp/jQuery-File-Upload">jQuery-File-Upload<A>.<BR>
You can easily upload your gcode files, view them and send to the CNC.<BR><BR><BR>
Remeber to set the group of the user running http server:<BR>
<BR>
1) check the device file linked to the CNC:<BR>
look for /dev/usb/lp0 without the CNC connected; connect the CNC, then look again.<BR>
If you found the device linked to lp0 check device link for get group:<BR>
# ls -l /dev/usb/lp0<BR>
# crw-rw---- 1 root lp       7,   0 mar 12 18:32 lp<BR>
You should see the device is on "lp" group<BR>
<BR>
2) Get the user running http server:<BR>
# ps -ef | grep apache2<BR>
# root       469     1  0 18:32 ?        00:00:00 /usr/sbin/apache2 -k start<BR>
# www-data   576   469  0 18:32 ?        00:00:00 /usr/sbin/apache2 -k start<BR>
<BR>
3) Insert that user (i.e. "www-data") in the lp group:<BR>
# usermod -a -G lp www-data<BR>
<BR>
4)Restart http server:<BR>
# service apache2 restart<BR>
