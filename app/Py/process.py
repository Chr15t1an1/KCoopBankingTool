import courselibs
Offering_lib = courselibs.Offering_lib
classId_lib = courselibs.classId_lib


import sys
import os
import pandas as pd
import numpy
import csv
import dateparser
import re
import shutil
import sys
# import pprint


working_dir = str(sys.argv[1])
phppass_filename = str(sys.argv[2])
file = working_dir+phppass_filename

#Librarys

######

#Functions
def move(src, dest):
    shutil.move(src, dest)


def num_only(a_input):
     a_input=re.sub("[^0-9]", "", a_input)
     return a_input

def timestamp_fix(i):
    i = i.date()
    i = i.strftime("%m/%d/%Y")
    return i


def split(filehandler, delimiter=',', row_limit=99, output_name_template='output_%s.csv', output_path='.', keep_headers=True):
    reader = csv.reader(filehandler, delimiter=delimiter)
    current_piece = 1
    current_out_path = os.path.join(
        output_path,
        output_name_template % current_piece
    )
   # print(current_out_path)
    current_out_writer = csv.writer(open(current_out_path, 'w'), delimiter=delimiter)
    current_limit = row_limit
    if keep_headers:
        headers = reader.__next__()
        current_out_writer.writerow(headers)
    for i, row in enumerate(reader):
        if i + 1 > current_limit:
            current_piece += 1
            current_limit = row_limit * current_piece
            current_out_path = os.path.join(
                output_path,
                output_name_template % current_piece
            )
            current_out_writer = csv.writer(open(current_out_path, 'w'), delimiter=delimiter)
            if keep_headers:
                current_out_writer.writerow(headers)
        current_out_writer.writerow(row)


def break_8Hour(file):
  #  print(file)
    classroom =[]
    with open(file) as csvfile:
        reader = csv.DictReader(csvfile)
        for row in reader:
            a= row['Last_Name'], row['Completion_Date'],row['NMLS_ID']
            #print(a)
            classroom.append(a)
    # for i in x:
    #     print(i)
    # Open FIles
    sevenhour = open("8hour=>7hour-NMLSbanking.csv", 'w',newline='',encoding='utf-8')
    onehour = open("8hour=>1hour-NMLSbanking.csv", 'w',newline='',encoding='utf-8')
    # out = open(working_dir + "/" + i + '-NMLSbanking.csv', 'w', newline='', encoding='utf-8')
    outputSeven = csv.writer(sevenhour)
    outputOne = csv.writer(onehour)

    headers = ['Course_Num','Offering_Num','NMLS_ID','Last_Name','Completion_Date','Inst']
    outputSeven.writerow(headers)
    outputOne.writerow(headers)
    for student in classroom:
        # print(student[0])
         sev = ['6915','293551',student[2],student[0],student[1]]
         outputSeven.writerow(sev)
         one = ['6924', '293550', student[2], student[0], student[1]]
         outputOne.writerow(one)

#End_Functions


#Pull Data From File
xl = pd.ExcelFile(file)
sheet1 = xl.parse(0,skiprows=0)
lastname = sheet1['Last Name']
CourseName = sheet1['Course Name']
compleated_Date = sheet1['Completed On']
compleation_per = sheet1['Completion %']
nmls_ids = sheet1['NMLS ID']
out_data = [['Last Name','Course Name', 'Compleated Date','Compleation Per','nmls ids']]
for i, item in enumerate(nmls_ids):
    nmls = nmls_ids[i]
    out_data.append([lastname[i],CourseName[i],compleated_Date[i],compleation_per[i],nmls])
#END###Pull Data From File

#Remove all non 100%
out_data.pop(0)
students_compleation=[]
for x in out_data:
    compleation_data = num_only(str(x[3]))
    students_compleation.append(x)
#End -- Remove all non 100%


#Organise into Classrooms
classrooms = {}
for i in students_compleation:
    key = i[1]
    classrooms.setdefault(key, [])
    email =i[0]
    classrooms[key].append(i)
#End Organise into Classrooms


#Save Class into Files
for i in classrooms: # Grabbing Classrooms -- i = Key
    course_id = classId_lib[i]
    offering_id = Offering_lib[i]

    class_room = [['Course_Num','Offering_Num','NMLS_ID','Last_Name', 'Completion_Date','Inst']]
    for student in classrooms[i]: # Iterating through students in  classroom.
        head, mid, tail = str(student[4]).partition('.')
        class_room.append([course_id,offering_id, head,student[0],timestamp_fix(student[2])])

    #Output to CSV
    # Write to new file
    out = open(working_dir+"/"+i+'-NMLSbanking.csv', 'w', newline='', encoding='utf-8')
    output = csv.writer(out)
    for row in class_room:
        #print(row)
        output.writerow(row)
    out.close()

#End_#Save Class into Files


os.chdir(working_dir)
files_in_dir = os.listdir()
files_to_check = []
for x in files_in_dir:
    file_extension = os.path.splitext(x)
    #print(file_extension[1])
    if file_extension[1] == ".csv":
        files_to_check.append(x)

#check length of files and grab ones with greater than 100
files_to_breakup =[]
for x in files_to_check:
    with open(x, "r") as f:
        reader = csv.reader(f, delimiter=",")
        data = list(reader)
        row_count = len(data)
    if row_count > 99:
        files_to_breakup.append(x)


for x in files_to_breakup:
    #print(x)
    outputfilename = str(x) + '_%s.csv'
    #split(open(files_to_breakup[0], 'r'), delimiter=',', row_limit=99, output_name_template=outputfilename);
    split(open(files_to_breakup[0], 'r'), delimiter=',', row_limit=99, output_name_template=outputfilename);
    #os.remove(x)


#Break 8 hour class into 7+1
for x in files_in_dir:
    # print(x)
    if "8 Hour" in x:
        break_8Hour(x)

#!



# os.chdir('/Users/c/Desktop/KCoopBankingTool/public/')
os.chdir('/var/www/KCoopBankingTool/public/')
#Zip files
output_filename ="output-"+phppass_filename
dir_name = working_dir
shutil.make_archive(output_filename, 'zip', dir_name)
#End Zip files


#Move File to Destination
src = output_filename+".zip"
dest ="exports/"+src
move(src, dest)
#End #Move File to Destination
