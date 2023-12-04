        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <title>Document</title>
        </head>
        
        <style>

            .Container {
                background: #00926E;
                height: 1000;
                position: relative;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;

            }


            .Panel{
                width: 380px;
                height: 100vh; 
                background: white;
                margin-top: -100px;
                border-top-left-radius: 30px; 
                border-top-right-radius: 30px;
                border-bottom-left-radius: 30px;
                border-bottom-right-radius: 30px;
                overflow-y: auto;
            }      

            .tjudul {
                text-align: left;
                position: relative;
                color: #333333;
                font-size: 24px;
                font-weight: bold;
                word-wrap: break-word;
                margin-left: 20px; 
                margin-bottom: 20px;
            }

            .tberita {
                text-align: left;
                position: relative;
                color: #333333;
                font-size: 16px;
                font-weight: 700;
                word-wrap: break-word;
                margin-left: 20px; 
                margin-top: 20px;
            }

            .imagebe img {
                width: 100%;
                height: 100%;

                border-radius: 10px;
            }


            .link{
                text-decoration: none;
            }

            .back-link {
            background-color: #00926E;
            color: white;
            margin-left: 20px;
            margin-top: 20px;
            padding: 10px 20px;
            border: none;   
            border-radius: 20px;
            cursor: pointer;
            }

            
            @media screen and (max-width: 700px) {
                .imagebe img{
                width: 700px;
                height: 700px;
                margin: auto;
                border-radius: 10px;
                }
            }
            

            
        </style>

        <body>
                
                    <div class="Container col justify-content-center">
                        
                        <div class="row justify-content-center">
                            <div class="Panel1">
                                <div class="imagebe">
                                    <img src="<?=base_url()?>img/Waste recycling Vectors & Illustrations for Free Download _ Freepik 1@2x.png" alt="Image Description">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="Panel">
                                <a href="<?=base_url('home')?>" type="button" class="back-link">Kembali</a>
                                <div class="tjudul">
                                    <?=$artikel['judul'] ?>
                                </div>
                                <div class="imagebe">
                                    <img src="<?=base_url()?>img/<?=$artikel['gambar'] ?>" alt="Image Description">
                                </div>
                                <div class="tberita">
                                    <?=$artikel['deskripsi'] ?>
                                </div>


                            </div>
                            
                        </div>
                    </div>
        </body>
        </html>