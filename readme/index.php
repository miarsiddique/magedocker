<!-- <?php phpinfo(); ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importance Docs</title>
    <link rel="stylesheet" href="css/bootsrap.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
            background: #e9ecef;
            /* color: #fff; */
        }
        .contain-area {
            border: 1px solid #ebeced;
            background: #fbfbfb;
            margin-top: 10px;
            padding: 20px;
        }
        h5 {
            color: red;
            margin-top:20px;
            font-weight: 800;
        }
        .note {
            background: #28a745;
            font-weight: 600;
            padding: 5px;
            font-size:14px;
            color: yellow;
        }
        .note-two {
            background: yellow;
            font-weight: 500;
            padding: 5px;
            font-size:12px;
        }
    </style>
</head>
<body>
    <div style="margin-top: 50px; margin-bottom: 50px;">
        <div class="container contain-area">
            <h5>*Magento 2.4.1 Installation Command </h5>
            <p class="note">Note:- Database name & password and project URL set acording you.</p>
            <p> <b>composer create-project --repository-url=https://repo.magento.com/ magento/project-community-edition=2.4.2 'my-app-name' </b></p>
            <p>   
            php bin/magento setup:install 
            --base-url=http://localhost/project-name/ 
            --db-host=localhost --db-name=mage24 
            --db-user=root --db-password=root@786 
            --admin-firstname=Digirock --admin-lastname=Media 
            --admin-email=demotest@gmail.com 
            --admin-user=kmadmin 
            --admin-password=Toronto@10340 
            --language=en_US --currency=USD 
            --timezone=America/Chicago 
            --use-rewrites=1
            </p>

            <p class="note">Note:- With elasticsearch on Local.</p>
            <p>
                php bin/magento setup:install --base-url="http://example.com/" --db-host="localhost" --db-name="mage242p1" --db-user="root" --db-password="root" --admin-firstname="Digirock" --admin-lastname="media" --admin-email="kmadmin@example.com" --admin-user="kmadmin" --admin-password="Toronto@8969" --language="en_US" --currency="USD" --timezone="America/Chicago" --use-rewrites="1" --backend-frontname="Kmadmin" --search-engine=elasticsearch7 --elasticsearch-host="localhost" --elasticsearch-port=9200
            </p>

            <p class="note">Note:- With elasticsearch on Docker.</p>
            <p>
                php bin/magento setup:install --base-url=http://localhost:8000/ --db-host=mysql --db-name=root --db-user=root --db-password=root --admin-firstname=Digirock --admin-lastname=Media --admin-email=demotest@gmail.com --admin-user=kmadmin --admin-password=Magento@0001 --language=en_US --currency=USD --timezone=America/Chicago --use-rewrites=0 --search-engine=elasticsearch7 --elasticsearch-host=elasticsearch --elasticsearch-port=9200
            </p>

            <p class="note">Note:- With elasticsearch on Server.</p>
            <p>
                php bin/magento setup:install --base-url=http://example.com/ --db-host=localhost --db-name=magedb --db-user=magedb --db-password=SportyBeheldYuleGripe --admin-firstname=Digirock --admin-lastname=Media --admin-email=demotest@gmail.com --admin-user=kmadmin --admin-password=Magento@0001 --language=en_US --currency=USD --timezone=America/Chicago --use-rewrites=0 --search-engine=elasticsearch7 --elasticsearch-host=https//example-elastic-search.com --elasticsearch-port=12345
            </p>
        </div>        

        <div class="container contain-area">
            <h5>* Setup Commands </h5>
            <p>rm -rf var/view_preprocessed/ pub/static/frontend/</p>
            <p>rm -rf var/view_preprocessed/ pub/static/frontend/ var/cache/ var/di/ var/generation/ var/page_cache/</p>
            <p>php bin/magento setup:upgrade </p>
            <p>php bin/magento setup:di:compile </p>
            <p>php bin/magento setup:static-content:deploy -f</p>
            <p>php bin/magento setup:static-content:deploy -f en_US</p>
            <p>php bin/magento setup:static-content:deploy -f en_CA</p>
            <p>php bin/magento indexer:reindex </p>
            <p>php bin/magento cache:flush </p>
            <p>php bin/magento cache:clean </p>
    
            <p class="note-two">When first time install project not working</p>
            <p>insert core_config_data (config_id, scope, scope_id, path, value) values (null, 'default', 0, 'dev/static/sign', 0);</p>

            <h5>* Create admin user </h5>

            <p>php bin/magento admin:user:create</p>
        </div>

        <div class="container contain-area">
            <h5>* Magento Reload Changes </h5>
            <p>
                sudo rm -rf var/view_preprocessed/ pub/static/frontend/ var/cache/ var/di/ var/generation/ var/page_cache/<br>
                sudo php bin/magento cache:flush<br>
                sudo php bin/magento cache:clean<br>
                sudo chmod -R 777 /var/www/html/{project-name}/<br>
            </p>

        </div>

        <div class="container contain-area">
            <h5>* Method #1. Install via Composer </h5>
            <p>sudo composer require mageplaza/magento-2-french-language-pack:dev-master </p>
            <p>sudo php bin/magento setup:static-content:deploy -f fr_FR</p>
            <p>sudo php bin/magento indexer:reindex</p>
            <p>sudo php bin/magento cache:clean</p>
            <p>sudo php bin/magento cache:flush</p>


            <p>sudo deploy:mode:show </p>
            <p>sudo deploy:mode:set developer, production</p>
            
            <p><a href="https://www.mageplaza.com/magento-2-french-language-pack.html" target="_blank">Refrence URL</a></p>
        </div>

        <div class="container contain-area">
            <h2># Install Elasticsearch on Ubuntu</h2>
            <h5>*Magento 2.4.1 Installation Command </h5>
            <ul class="note">Docs link:- 
                <li class="note">https://www.emizentech.com/blog/magento-2-4-with-elasticsearch-complete-guide.html</li>
                <li class="note">https://oridahmed.blogspot.com/2018/01/how-to-install-and-configure-elk.html</li>
            </ul>
            <h6>Step 1 – Install Java </h6>
            <ul>
                <li>sudo apt-get install</li>
                <li>sudo apt install openjdk-8-jdk</li>
                <li>java -version</li>
            </ul>
            
            <h6>Step 2 – Installing from the APT repository </h6>
            <ul>
                <li>sudo apt install apt-transport-https</li>
                <li>wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | sudo apt-key add -</li>
                <li>echo "deb https://artifacts.elastic.co/packages/6.x/apt stable main" | sudo tee -a /etc/apt/sources.list.d/elastic-6.x.list</li>
                <li>sudo apt-get update</li>
                <li>sudo apt-get install elasticsearch</li>
                <li>sudo systemctl daemon-reload</li>
                <li>sudo systemctl enable elasticsearch.service</li>
                <li>sudo systemctl start elasticsearch.service</li>
                <li>sudo service elasticsearch status</li>
            </ul>            
        </div>
    </div>
</body>
</html>