# Agregar a una lista.
# If / Elsif
# junio 2021
thislist = []
nom = "nom"
while nom != "0":
  nom = input ("Nombre: ")
  if nom == "0":
   pass
  elif nom != "0":
   thislist.append(nom)
# Imprime la lista
for items in thislist:
    print (items)

# Espacio en blanco
print ()

# Cuenta la lista y lo imprime
lenlist = len (thislist)
print ("Cantidad de ítems:", lenlist)

numtext = 'Elejí un número del 1 al ', lenlist
num = int(input (numtext))
print ("El ítem", num, "es", thislist [num -1])