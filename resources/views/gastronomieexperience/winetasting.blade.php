<x-layout>
    
    <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center"  style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($image->path)}}'); background-repeat: no-repeat; background-size: cover;">  
        <h1 class="fw-bold">{{ $categoryName }}</h1>
    </header>
    
    <main class="main-service vh-100">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dolorum hic velit fuga quibusdam debitis placeat nemo praesentium voluptatem aperiam.</h5>
                    
                    <h5 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo vero reiciendis dolorum dignissimos inventore commodi recusandae veritatis! Debitis, laborum deserunt!</h5>
                    
                    <h5 class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae odio inventore velit quidem repudiandae tempore doloremque asperiores molestias quas ullam!</h5>
                    
                    <h5 class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum molestiae sint alias consequatur ut enim rem quia, dolores commodi, assumenda blanditiis impedit quas velit animi hic ipsam ab explicabo corrupti.</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-5 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>
            
        </div>
   
    </main>
    
</x-layout>