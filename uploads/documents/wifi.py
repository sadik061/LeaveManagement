import urllib3

#import database_statistics

def getRouterUrl():
    return 'http://192.168.0.1' #Ip to TP-Link router

def SetupRouterConnection():

   #TP-Link router username and password
   username = 'admin'
   password = 'admin'

#    p = urllib3.HTTPPasswordMgrWithDefaultRealm()
   p = urllib3.

   p.add_password(None, getRouterUrl(), username, password)

   handler = urllib3.HTTPBasicAuthHandler(p)
   opener = urllib3.build_opener(handler)
   urllib3.install_opener(opener)
   return True


SetupRouterConnection()