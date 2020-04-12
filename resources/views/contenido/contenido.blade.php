 <!-- Contenido Principal -->
 <!-- se extiende de la plantilla principal -->
 @extends('principal')
 <!-- se crea una seccion con el nombre de contenido para ser llamado en el principal html -->
 @section('contenido')
 <template v-if="menu==0">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
 <h1>Contenido del menu0</h1>
 </template>

 <template v-if="menu==1">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <categoria>Contenido del menu1</categoria>
 </template>
 <template v-if="menu==2">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu2</h1>
 </template>
 <template v-if="menu==3">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu3</h1>
 </template>
 <template v-if="menu==4">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu4</h1>
 </template>
 <template v-if="menu==5">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu5</h1>
 </template>
 <template v-if="menu==6">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu6</h1>
 </template>
 <template v-if="menu==7">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu7</h1>
 </template>
 <template v-if="menu==8">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu8</h1>
 </template>
 <template v-if="menu==9">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu9</h1>
 </template>
 <template v-if="menu==10">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu10</h1>
 </template>
 <template v-if="menu==11">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu11</h1>
 </template>
 <template v-if="menu==12">
 <!-- // componente  que se encuentra en la carpeta components de vue -->
   <h1>Contenido del menu12</h1>
 </template>

        @endsection
        <!-- /Fin del contenido principal -->