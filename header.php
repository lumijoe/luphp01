<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testsgcdemosite01</title>

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- js -->
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Font,Icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <!------------------------------- 
        header
    -------------------------------->
    <header>
        <div class="flex relative gap-5 justify-between pb-5 pl-20 w-[100%] bg-white max-md:flex-wrap max-md:pl-5 max-md:max-w-full">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/557d909dc04bad148e9166c9181b8eb8925cdf52a22fb7912f64499ff1faec6e?apiKey=38f7627b5364403abcba366dc95bc6e8&" alt="Company logo" class="shrink-0 self-end mt-6 max-w-full aspect-[5.88] w-[430px]" />
            <div class="flex gap-5 items-end max-md:flex-wrap max-md:max-w-full">
                <h2 class="mt-20 text-xl tracking-wider text-black max-md:mt-10">選ばれる理由</h2>
                <h2 class="flex-auto mt-20 text-xl tracking-wider text-black max-md:mt-10">サービス紹介</h2>
                <div class="flex flex-col self-stretch max-md:max-w-full">
                    <div class="flex flex-col self-end max-w-full text-orange-500 w-[446px]">
                        <div class="flex z-10 gap-0 self-end text-3xl leading-10">
                            <p class="z-10 grow my-auto">TEL 03-3342-9620</p>
                            <div class="shrink-0 bg-white h-[59px] w-[244px]" aria-hidden="true"></div>
                        </div>
                        <p class="text-sm tracking-wide leading-7 max-md:max-w-full">受付時間 10:00~18:00【土日祝定休日】</p>
                    </div>
                    <nav class="flex gap-5 mt-5 text-xl tracking-wider text-black whitespace-nowrap max-md:flex-wrap max-md:max-w-full">
                        <a href="#" class="grow">導入までの流れ</a>
                        <a href="#" class="flex-auto">料金プラン</a>
                        <a href="#" class="flex-auto">よくあるご質問</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!------------------------------- 
        main
    -------------------------------->
    <main>