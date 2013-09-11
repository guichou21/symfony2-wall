Symfony2-wall
====================

A code to create a homepage and a wall of item (photos for now)


Copy public files from web/public bundle to web/public
=======================================================
php app/console assets:install web


Create user to access admin panel
===================================
php app/console fos:user:create testuser test@example.com p@ssword
php app/console fos:user:activate testuser
php app/console fos:user:promote testuser ROLE_ADMIN

or create with: --super-admin

Folder App
===========
add wallBlog.yml to config.yml

Folder Web
===========
- Pour stocker les images uploadées créer le dossier: images/wall
- Mettre la bonne url dans le templat RSS twig

Admin
=======
Connect with admin/adminpass then create a new admin user and delete this one