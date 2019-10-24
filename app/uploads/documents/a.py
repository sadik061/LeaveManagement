s = []

while True:
    temp = input()

    if temp == 'DONE':
        break
    else:
        s.append(temp)


for sen in s:
    sen = sen.replace('.','')
    sen = sen.replace(',','')
    sen = sen.replace('!','')
    sen = sen.replace('?','')
    sen = sen.replace(' ','')

    sen.strip()
    sen = sen.lower()

    length = len(sen)
    if length % 2==0:
        if (sen[:length//2]==sen[length//2:][::-1]):
            print("You won’t be eaten!")
        else:
            print('Uh oh..')
    else:
        length = (length//2)
        if (sen[:length]==sen[length+1:][::-1]):
            print("You won’t be eaten!")
        else:
            print('Uh oh..')