import sys
from docxtpl import DocxTemplate
import jinja2
import json
import os
import ast


files=sys.argv[1]
# print(files)
# print(sys.argv[2])

context = eval(sys.argv[2])
print(type(context))

doc = DocxTemplate(files+'\Http\Controllers\Full_Auth\Full_AuthComplete.docx')

doc.render(context)

doc.save(files+'\Http\Controllers\Full_Auth\Full_Complete.docx')