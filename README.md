# kenderaan
Sistem kenderaan ilpkls

## Cara penggunaan:
1. Clone repository
`git clone https://github.com/hishamaderis/kenderaan`    
2. Masuk ke folder
`cd kenderaan`
3. Hidupkan container
`docker compose up -d`
4. Import sql ke dalam database
`docker compose exec db bash -c "mysql -u kenderaanilp -p kenderaanilp < /tmp/kenderaan/kenderaanilp.sql"`
5. Layari http://localhost:8000 untuk melihat sistem
