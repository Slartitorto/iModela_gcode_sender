# iModela_gcode_sender
Upload to a Raspberry with apache server and connect Raspberry to Roland iModela CNC<BR>
This project is based on Blueimp <a href="https://github.com/blueimp/jQuery-File-Upload">jQuery-File-Upload<A>.<BR>
You can easily upload your gcode files, view them and send to the CNC.<BR><BR>
Remeber to set the group of the user running http server:<BR>
check device link:<BR>
ls -l /dev/usb/lp0<BR>
You should see the device is on "lp" group<BR>
Get the user running http server:<BR>
ps -ef | grep apache2<BR>
Insert that user in the lp group:<BR>
usermod -a -G lp www-data<BR>
Restart http server:<BR>
service apache2 restart<BR>
