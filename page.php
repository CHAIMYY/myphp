<?php
include "connexion.php"
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DataWare HR Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="bg-gray-100 py-10">
    <h2></h2>
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-center">
            
            <!-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
              <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add user</button>
            </div> -->
          </div>
          <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle">
                <div class="overflow-hidden shadow-sm ring-1 ring-black ring-opacity-5">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50 md:text-xs md:p-4 ">
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8 ">ID-Membre</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nom</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">Prenom</th>
                         <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">Email</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">Telephone</th> 
                         <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">Role</th>
                         <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">Equipe</th>
                         <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">Statut</th>
                        <!-- <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                          <span class="sr-only">Edit</span>
                        </th> -->
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <?php
                      $req="select * from membre_du_personnel";
                      $res=mysqli_query($connexion,$req);
                      while($row=mysqli_fetch_row($res)){

                      

                      ?>
                        <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">  <?php
                      echo $row[0]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[1]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[2]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[3]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[4]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[5]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[6]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[7]
                      ?></td>
                          
                         
                          <!-- <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                          </td> -->
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        </div>
        <div class="bg-gray-100 py-10">
    
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-center">
            
            <!-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
              <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add user</button>
            </div> -->
          </div>
          <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle">
                <div class="overflow-hidden shadow-sm ring-1 ring-black ring-opacity-5">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">ID-Equipe</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nom d'Equipe</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date de creation</th>
                        
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <?php
                      $req="select * from equipe";
                      $res=mysqli_query($connexion,$req);
                      while($row=mysqli_fetch_row($res)){

                      

                      ?>
                        <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">  <?php
                      echo $row[0]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[1]
                      ?></td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php
                      echo $row[2]
                      ?></td>
                        
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        </div>
</body>
</html>
