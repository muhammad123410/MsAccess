import sys
from docxtpl import DocxTemplate
import jinja2
import json
import os



files=sys.argv[1]
# print(files)
# print(sys.argv[2])

context = eval(sys.argv[2])
print(type(context))

doc = DocxTemplate(files+'\Http\Controllers\Alive_Statement\A_C.docx')
print(context)
doc.render(context)
print('adfasf')

doc.save(files+'\Http\Controllers\Alive_Statement\A_C_Comlete.docx')