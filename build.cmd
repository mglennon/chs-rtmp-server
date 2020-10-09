docker stop chs-rtmp-server
docker rm chs-rtmp-server
docker images -f dangling=true
docker build . -t basebox.homestead:5000/chs-rtmp-server:dev
rem docker push basebox.homestead:5000/chs-rtmp-server:devaa