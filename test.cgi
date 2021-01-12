#!/usr/bin/env python3

import cgi
import urllib.parse
import os

def main():
    callingURL = os.environ["HTTP_HOST"] # get the url
    useURL = showURL('//' + callingURL)
    contents = processInput(useURL)   # process input into a page
    print(contents)
    
def showURL(chkURL):
    s = urllib.parse.urlsplit(chkURL)
    if "rudhamlawyers" in s.netloc:
        newpath = "/rl/"
    else:
        newpath = "/nr/"
    newURL = urllib.parse.urlunsplit(('http', s.netloc, newpath, '', ''))
    return(newURL)
        
    
def processInput(useURL):  
    '''Process input parameters and return the final page as a string.'''
    return fileToStr('indexTemplate.html').format(**locals())

# standard code for future cgi scripts from here on
def fileToStr(fileName): 
    """Return a string containing the contents of the named file."""
    fin = open(fileName); 
    contents = fin.read();  
    fin.close() 
    return contents

try:
    print("Content-type: text/html\n\n")   # say generating html
    main() 
except:
    cgi.print_exception()                 # catch and print errors


