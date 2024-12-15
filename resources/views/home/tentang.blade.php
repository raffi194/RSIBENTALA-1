@extends('layout.home')

@section('title', 'Tentang')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo bentala putih.png">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/styleguide.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>BENTALA</title>

</head>
<body>
    <div class="content mx-auto">
        <div class="relative">
            <div class="slider flex flex-col snap-y snap-mandatory overflow-y-auto h-screen touch-pan-y scrollbar-hide">
                <div class="slide flex-none snap-start w-full h-screen flex justify-center items-center relative">
                    <img src="{{ asset('front/About atas.png') }}" alt="Your image" class="w-full h-full object-cover">
                    
                    <div class="absolute bottom-4 left-12">
                        <span class=" text-[--putih] font-semibold text-6xl uppercase">Bentala</span>
                    </div>                
                </div>                               

                <div class="slide flex-none snap-start w-full h-screen">
                    <div class="flex flex-nowrap h-[50%]">
                        <div class="h-[50%] w-[50%] justify-start relative p-16">
                            <div class="mb-10">
                                <span class="text-[--hitam] font-semibold text-6xl uppercase">PROFIL</span>
                            </div>
                            <span class="text-lg fone text-[--hitam]">
                                Bentala adalah perusahaan produk fashion ramah lingkungan yang berdiri di Malang, Indonesia pada tahun 2015. Bentala didirikan dengan tujuan mendorong kesadaran masyarakat atas keadaan di lingkungan global.
                            </span>
                        </div>
                    
                        <div class="h-[50%] w-[50%] justify-start relative p-16">
                            <div class=" flex flex-col space-y-5">
                                <span class="text-lg fone text-[--hitam]">
                                    Bentala menggunakan bahan baku yang ramah lingkungan, seperti serat kanvas dari tanaman kenaf, kulit sintetis dari limbah plastik, dan sol dari karet daur ulang. Perusahaan ini juga menggunakan proses produksi yang ramah lingkungan, seperti menggunakan energi matahari dan menghemat air.
                                </span>
                                <span class="text-lg fone text-[--hitam]">
                                    Bentala menawarkan berbagai macam produk seperti, sepatu, tas, sandal, baju, kaos kaki, dan kemeja. Produk-produk tersebut dirancang dengan gaya yang modern dan kasual, sehingga cocok untuk berbagai macam aktivitas.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="h-[50%] w-full flex">
                        <img src="{{ asset('front/About 3.png')}}" class="w-full h-full object-cover">
                    </div>                    
                </div>                                             

                <div class="slide flex-none snap-start w-full h-screen">
                    <div class="flex flex-nowrap h-1/2 w-full">
                        <div class="flex flex-nowrap w-full h-full">
                            <div class="w-1/2">
                                <img src="{{ asset('front/About 2.png')}}" class="w-full h-full object-cover" alt="Image Description">
                            </div>
                            
                            <div class="w-1/2 p-16 flex flex-col justify-center items-start text-[--hitam]">
                                <span class="text-4xl font-bold mb-4">VISI</span>
                                <span class="text-lg">Menjadi pelopor dalam industri fashion berbahan daur ulang yang memberdayakan gaya hidup berkelanjutan, menciptakan tren positif, dan mendorong kesadaran lingkungan global.</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="flex flex-nowrap h-1/2 w-full">
                        <div class="flex flex-nowrap w-full h-full">
                            <div class="w-1/2 flex flex-col justify-center items-start p-8 text-[--hitam]">
                                <span class="text-4xl font-bold mb-4">MISI</span>
                                <ul class="w-full space-y-5">
                                    <li class="flex font-medium justify-start text-[--hitam] text-3xl underline">
                                        <span>Inovasi Berkelanjutan</span>
                                    </li>
                                    <li class="flex font-medium justify-end text-[--hitam] text-3xl underline">
                                        <span>Reduksi Limbah</span>
                                    </li>
                                    <li class="flex font-medium justify-start text-[--hitam] text-3xl underline">
                                        <span>Edukasi Konsumen</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2">
                                <img src="{{ asset('front/About 4.png')}}" class="w-full h-full object-contain" alt="Image Description">
                            </div>
                        </div>     
                    </div>
                </div>  
                
                <div class="slide flex-none snap-start w-full h-screen flex flex-col justify-center items-center">
                    <div class="text-center mb-5 w-[90%] mt-14">
                        <span class="text-6xl font-bold text-[--hitam] mb-4">Change Fashion, Change the World - Start with Bentala</span>
                    </div>

                    <div class="text-center mb-7 w-[70%]">
                        <span class="text-lg text-[--hitam]">"A platform dedicated to sustainable fashion, empowering you to make responsible choices through eco-friendly products, transparent supply chains, and carbon footprint insights for a greener future."</span>
                    </div>
                
                    <div class="w-full h-[60%] flex justify-center items-center">
                        <video class="w-full h-full object-cover" autoplay loop muted>
                            <source src="front/About vidio.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>                

                <div class="slide flex-none snap-start w-full h-screen flex flex-col">
                    <div class="relative overflow-hidden h-1/2 mt-16">
                        <div class="flex space-x-6 animate-cards">
                            <div class="w-64 h-72 bg-[--putih] rounded-lg shadow-md flex flex-col justify-center items-center p-4 mx-3">
                                <img src="{{ asset('front/img/Billy.png') }}" alt="Profile 1" class="w-24 h-24 rounded-xl mb-4" />
                                <h3 class="text-xl font-bold text-[--hitam]">Billy</h3>
                            </div>
                        
                            <div class="w-64 h-72 bg-[--putih] rounded-lg shadow-md flex flex-col justify-center items-center p-4 mx-3">
                                <img src="{{ asset('front/img/Radhwa.png') }}" alt="Profile 2" class="w-24 h-24 rounded-xl mb-4" />
                                <h3 class="text-xl font-bold text-[--hitam]">Fayyadh</h3>
                            </div>
                        
                            <div class="w-64 h-72 bg-[--putih] rounded-lg shadow-md flex flex-col justify-center items-center p-4 mx-3">
                                <img src="{{ asset('front/img/Dancung.png') }}" alt="Profile 3" class="w-24 h-24 rounded-xl mb-4" />
                                <h3 class="text-xl font-bold text-[--hitam]">Akhdan</h3>
                            </div>
                        
                            <div class="w-64 h-72 bg-[--putih] rounded-lg shadow-md flex flex-col justify-center items-center p-4 mx-3">
                                <img src="{{ asset('front/img/Rapi.png') }}" alt="Profile 4" class="w-24 h-24 rounded-xl mb-4" />
                                <h3 class="text-xl font-bold text-[--hitam]">Raffi</h3>
                            </div>
                        </div>                          
                    </div>
                
                    <div class="flex justify-center items-center h-1/2">
                        <div class="flex w-full">
                            <div class="w-full pl-12 space-y-3">
                                <div>
                                    <span class="text-[--hitam] font-bold text-3xl">Let’s talk</span>
                                </div>
                                <div class="w-2/3">
                                    <span class="text-[--hitam] font-medium text-lg">We partner with sustainable creators, conscious entrepreneurs, and true changemakers.</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="text-3xl text-[--hitam]">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                            
                                    <div class="flex flex-col">
                                        <span class="text-lg font-semibold text-[--hitam]">Email</span>
                                        <span class="text-sm text-[--hitam]">bentala@gmail.com</span>
                                    </div>
                                </div>                                
                                <div class="flex items-center space-x-4">
                                    <div class="text-3xl text-[--hitam]">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                
                                    <div class="flex flex-col">
                                        <span class="text-lg font-semibold text-[--hitam]">Call us</span>
                                        <span class="text-sm text-[--hitam]">+123 456 7892</span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="text-3xl text-[--hitam]">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                
                                    <div class="flex flex-col">
                                        <span class="text-lg font-semibold text-[--hitam]">Find us</span>
                                        <span class="text-sm text-[--hitam]">Fakultas Ilmu Komputer Universitas Brawijaya</span>
                                    </div>
                                </div>        
                                <div class="flex items-center space-x-5 border-t-2 border-[--hitam] pt-2 w-2/3">
                                    <div class="text-3xl text-[--hitam]">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                
                                    <div class="text-3xl text-[--hitam]">
                                        <i class="fa-brands fa-twitter"></i>
                                    </div>
                                
                                    <div class="text-3xl text-[--hitam]">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </div>
                                </div>                                
                            </div>

                            <div class="w-full">
                                <form class="p-3 rounded-lg shadow-lg grid grid-cols-2 gap-2">
                                    <div class="col-span-1">
                                        <label for="firstname" class="block text-xs font-medium text-[--hitam] mb-1">First Name:</label>
                                        <input
                                            type="text"
                                            id="firstname"
                                            name="firstname"
                                            required
                                            placeholder="Enter your first name"
                                            class="block w-full p-2 border border-[--hitam] rounded-lg focus:ring-[--ijo] focus:border-[--ijo] mb-3 text-sm"
                                        />
                                    </div>
                            
                                    <div class="col-span-1">
                                        <label for="lastname" class="block text-xs font-medium text-[--hitam] mb-1">Last Name:</label>
                                        <input
                                            type="text"
                                            id="lastname"
                                            name="lastname"
                                            required
                                            placeholder="Enter your last name"
                                            class="block w-full p-2 border border-[--hitam] rounded-lg focus:ring-[--ijo] focus:border-[--ijo] mb-3 text-sm"
                                        />
                                    </div>
                            
                                    <div class="col-span-1">
                                        <label for="email" class="block text-xs font-medium text-[--hitam] mb-1">Email Address:</label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            required
                                            placeholder="Enter your email"
                                            class="block w-full p-2 border border-[--hitam] rounded-lg focus:ring-[--ijo] focus:border-[--ijo] mb-3 text-sm"
                                        />
                                    </div>
                            
                                    <div class="col-span-1">
                                        <label for="phone" class="block text-xs font-medium text-[--hitam] mb-1">Phone Number:</label>
                                        <input
                                            type="tel"
                                            id="phone"
                                            name="phone"
                                            required
                                            placeholder="Enter your phone number"
                                            class="block w-full p-2 border border-[--hitam] rounded-lg focus:ring-[--ijo] focus:border-[--ijo] mb-3 text-sm"
                                        />
                                    </div>
                            
                                    <div class="col-span-2">
                                        <label for="message" class="block text-xs font-medium text-[--hitam] mb-1">Message (Optional):</label>
                                        <textarea
                                            id="message"
                                            name="message"
                                            rows="3"
                                            placeholder="Your message here..."
                                            class="block w-full p-2 border border-[--hitam] rounded-lg focus:ring-[--ijo] focus:border-[--ijo] mb-3 text-sm"
                                        ></textarea>
                                    </div>
                            
                                    <div class="col-span-2">
                                        <button
                                            type="submit"
                                            class="w-full bg-[--ijo] text-[--putih] font-semibold py-2 px-4 rounded-lg hover:bg-[--hitam] text-sm"
                                        >
                                            Subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>                                                      
                        </div>
                    </div>
                </div>
                
                <style>
                    @keyframes cards-animation {
                        0% {
                            transform: translateX(100%);
                        }
                        100% {
                            transform: translateX(-100%);
                        }
                    }
                
                    .animate-cards {
                        animation: cards-animation 30s linear infinite;
                    }
                </style>
                
                

            </div>

            <div class="slider-dots fixed right-5 top-1/2 transform -translate-y-1/2 flex flex-col">
                <div class="dot mb-2 w-3 h-3 rounded-full cursor-pointer" onclick="scrollToSlide(1)"></div>
                <div class="dot mb-2 w-3 h-3 rounded-full cursor-pointer" onclick="scrollToSlide(2)"></div>
                <div class="dot mb-2 w-3 h-3 rounded-full cursor-pointer" onclick="scrollToSlide(3)"></div>
                <div class="dot mb-2 w-3 h-3 rounded-full cursor-pointer" onclick="scrollToSlide(4)"></div>
                <div class="dot mb-2 w-3 h-3 rounded-full cursor-pointer" onclick="scrollToSlide(5)"></div>
            </div>
        </div>
    </div>

    <style>
        .scrollbar-hide {
            -ms-overflow-style: none;   
            scrollbar-width: none;    
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;           
        }
    </style>

    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        function scrollToSlide(index) {
            const slide = slides[index - 1];
            slide.scrollIntoView({ behavior: 'smooth' });
        }

        function updateActiveDot() {
            const scrollPosition = slider.scrollTop;
            const slideHeight = slider.offsetHeight;
            const activeIndex = Math.round(scrollPosition / slideHeight);

            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-[--hitam]', index === activeIndex);
                dot.classList.toggle('bg-[--hitamkurang]', index !== activeIndex);
            });
        }

        slider.addEventListener('scroll', () => {
            updateActiveDot();
        });

        updateActiveDot();
    </script>

            <div id="videoPopup" class="fixed inset-0 items-center justify-center hidden">
                <div id="videoContent" class="relative w-screen h-screen flex items-center justify-center">
                    <video id="myVideo" class="w-full h-full object-cover" loop>
                        <source src="img/You are an idiot!! - Zuhuk (480p, h264, youtube).mp4" type="video/mp4">
                    </video>
                    <div id="question" class="absolute bottom-10 left-1/2 text-[--putih] rounded-lg transition-all duration-300 inline-flex flex-col items-center">
                        <p class="text-lg font-semibold text-center">Raffi ganteng? Yes or No</p>
                        <div class="flex justify-center mt-4 space-x-4">
                            <button id="yesButton" class="bg-[--hitam] text-[--putih] px-4 py-2 rounded transition duration-200">Yes</button>
                            <button id="noButton" class="bg-[--hitam] text-[--putih] px-4 py-2 rounded transition duration-200">No</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                function moveQuestion() {
                    const question = document.getElementById('question');
                    const videoContent = document.getElementById('videoContent');
                    
                    if (!question || !videoContent) return;
                
                    const containerWidth = videoContent.clientWidth;
                    const containerHeight = videoContent.clientHeight;
                
                    const questionWidth = question.offsetWidth;
                    const questionHeight = question.offsetHeight;
                
                    const randomX = Math.max(0, Math.min(containerWidth - questionWidth, Math.random() * containerWidth));
                    const randomY = Math.max(0, Math.min(containerHeight - questionHeight, Math.random() * containerHeight));
                
                    question.style.left = `${randomX}px`;
                    question.style.top = `${randomY}px`;
                    question.style.transform = 'translate(0, 0)'; 
                }
            
                const yesButton = document.getElementById('yesButton');
                const noButton = document.getElementById('noButton');
            
                noButton.addEventListener('mouseenter', () => {
                    moveQuestion(); 
                });
            
                yesButton.addEventListener('click', () => {
                    window.location.href = 'index.html';
                });
            </script>

    <script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js'></script>
    <script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js'></script>
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
    <script src="https:// cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
@endsection
