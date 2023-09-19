<!-- appunti vari -->

<!-- richiamare category->image -->
@if ($category->image)
    <img class="img-section" src="{{ asset($category->image->path) }}" alt="{{ $category->name }}">
@endif

<!-- foreach subcategories gastronomie experience -->

            {{-- @foreach ($subCategories as $subCategory) --}}
            {{-- <div class="col-6 col-md-6 mt-4 margin-col-custom">
                <a href="{{ route('gastronomieexperience.cheesetasting')}} ">
                       @foreach ($subCategory->imageSubcategories as $imageSubcategory)
                           <img class="img-subcategories img-fluid" src="{{ asset($imageSubcategory->path) }}" alt="{{ $subCategory->name }}">
                           @endforeach
                           <h6 class="mt-3 fw-semibold text-center subCatTitle-text">{{ $subCategory->name }}</h6>  
                   </a>
               </div> --}}
