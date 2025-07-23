@echo off

:loop
echo Running git auto-push at %time%

git add .
git commit -m "DB: New Update initial database for project and json files"
git push origin main

timeout /t 300 /nobreak

goto loop
