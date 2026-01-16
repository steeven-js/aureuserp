# 1. Arrêter tous les processus
pkill -f "php artisan serve" 2>/dev/null || true
pkill -f "php artisan queue:listen" 2>/dev/null || true
pkill -f "php artisan pail" 2>/dev/null || true
pkill -f "vite" 2>/dev/null || true
pkill -f "concurrently" 2>/dev/null || true
lsof -ti:8000,8001,8002,8003,8004 | xargs kill -9 2>/dev/null || true

# 2. Installer les dépendances npm (si pas déjà fait)
npm install

# 3. Relancer le serveur de développement
composer run dev