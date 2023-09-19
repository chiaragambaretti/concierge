<x-layout>
    
    <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center"  style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($image->path)}}'); background-repeat: no-repeat; background-size: cover;">  
        <h1 class="fw-bold">{{ $categoryName }}</h1>
    </header>
    
    <main class="main-service vh-100">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi non neque corrupti eligendi dignissimos ipsa tempore? Enim, debitis dolore.</h5>
                    
                    <h5 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nisi ad rem cupiditate, mollitia ab impedit alias esse totam dolores!</h5>
                    
                    <h5 class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis veniam repudiandae cum quisquam voluptate commodi minus blanditiis tempora porro.</h5>
                    
                    <h5 class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum molestiae sint alias consequatur ut enim rem quia, dolores commodi, assumenda blanditiis impedit quas velit animi hic ipsam ab explicabo corrupti.</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-5 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>
            
        </div>
           
    </main>
 
</x-layout>