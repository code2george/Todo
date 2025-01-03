<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Tâches</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-500">
    <!-- Barre de Navigation -->
    <nav class="bg-black p-4">
        <div class="container flex justify-between items-center">
            <div class="relative group">
                <div class="flex items-center space-x-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" class="fill-current text-gray-400 hover:text-gray-600">
                        <path d="M120-240v-66.67h720V-240H120Zm0-206.67v-66.66h720v66.66H120Zm0-206.66V-720h720v66.67H120Z" />
                    </svg>
                    <a href="#" class="text-white text-2xl font-bold hover:text-gray-500">Menu</a>
                </div>
                <div class="absolute mt-2 ml-0 left-0 w-56 space-y-8 bg-gray-800 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all duration-300 ease-in-out z-10">
                    <a href="acceuil.php" class="block px-4 py-2 text-sm font-bold text-white hover:bg-stone-600">Liste des tâches</a>
                    <a href="task.php" class="block px-4 py-2 text-sm font-bold text-white  hover:bg-stone-600">Tâche</a>
                </div>
            </div>
            <div>
                <a href="acceuil.php" class="text-gray-300 px-3 py-2 font-medium hover:bg-blue-500 hover:text-purple-900">Accueil</a>
                <a href="#" class="text-gray-300 px-3 py-2 font-medium hover:bg-blue-500 hover:text-purple-900">À propos</a>
                <a href="#" class="text-gray-300 px-3 py-2 font-medium hover:bg-blue-500 hover:text-purple-900">Contact</a>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><a href="task.php" class="text-gray-300 px-3 py-2 font-medium">Nouveau Tâche</a></button>
            </div>
        </div>
    </nav>

    <header>
        <div class="container mx-auto mt-10">
            <h2 class="text-2xl font-bold mb-6 text-center">Liste des Tâches</h2>
            <ul id="liste" class="list-none flex flex-wrap">
                <!-- Les tâches ajoutées apparaîtront ici -->
                <!-- <ul class="font-bold"></ul> -->

                <?php include 'connec.php'; ?>
                <?php include 'read.php'; ?>
                <?php
                foreach ($users as $value): ?>
                        <div class="mx-auto p-0 w-52 text-center border-slate-400 rounded-md mb-4 bg-zinc-400 shadow">
                            <div class="font-bold text-center text-xl">
                                <?php echo $value['titre']; ?>
                                <hr>
                            </div>
                            <div class="text-center">
                                <?php echo $value['descri']; ?>
                            </div>
                            <div class="space-x-4 pt-4">
                            
                                <a href="delete.php?id=<?php echo $value['titre']; ?>" class="bg-slate-400 rounded-md px-1 py-1 font-serif font-medium hover:bg-slate-900 hover:text-white">Supprimer</a>
                            </div>
                        </div>
                <?php endforeach; ?>

            </ul>
        </div>
    </header>
    
    <script src="ajout.js"></script>
</body>

</html>