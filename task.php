<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâches</title>
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
                    <a href="task.php" class="block px-4 py-2 text-sm font-bold text-white hover:bg-stone-600">Tâche</a>

                </div>
            </div>
            <div>
                <a href="acceuil.php" class="text-gray-300 px-3 py-2 font-medium hover:bg-blue-950 hover:text-purple-900">Accueil</a>
                <a href="#" class="text-gray-300 px-3 py-2 font-medium hover:bg-blue-950 hover:text-purple-900">À propos</a>
                <a href="#" class="text-gray-300 px-3 py-2 font-medium hover:bg-blue-950 hover:text-purple-900">Contact</a>
            </div>
        </div>
    </nav>
    <header>
        <!-- Formulaire d'ajout de tâche -->
        <div class="container mx-auto mt-10 p-6 space-x-2 bg-zinc-400 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Ajouter une Tâche</h2>
            <form id="task-form" method="post" action="save.php">
                <div class="mx-11">
                    <label for="task_title" class="block text-sm font-medium text-gray-700">Titre de la tâche</label>
                    <input type="text" id="task-title" name="task_title" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mx-11">
                    <label for="task_desc" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="task-desc" name="task_desc" class="mt-1 block w-full p-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                </div>
                <div class="flex justify-center mt-6"> 
                    <button type="submit" class="w-1/3 justify-center bg-indigo-600 mx-11 text-white py-2 px-2 rounded-md hover:bg-indigo-700">Ajouter Tâche</button>
                </div>
            </form>
        </div>

        <!-- Liste des tâches -->

    </header>
    
</body>

</html>