<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(Request::is('portfolios'))
            {{ __("Portfolio") }}
            @elseif(Request::is('catagory'))
            {{ __("Catagory") }}   
            @elseif(Request::is('blogs'))
            {{ __("Blog") }}    
            @elseif(Request::is('messages'))
            {{ __("Contact Message") }}
            @else
            {{ __("Dashboard") }}
            @endif    
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Request::is('portfolios'))
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 order-md-1 order-lg-1 order-sm-2">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr class="text-center">
                                        <th>Catagory</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th>Catagory</th>
                                        <th>Title</th>
                                        <th>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis impedit ex numquam enim. Veniam molestias, quam fugit eaque pariatur id velit neque cumque, quisquam necessitatibus rem provident sed suscipit aperiam? Necessitatibus dolore omnis enim magni, laborum dicta totam, cumque eos perspiciatis unde nesciunt! Distinctio, vel! Repellendus officia amet sed.</th>
                                        <th>Photo</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>Catagory</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Photo</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>Catagory</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Photo</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>Catagory</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Photo</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 order-md-2 order-lg-2 order-sm-1 mb-2">
                            <div class="mb-3">
                                <label for="catagory" class="form-label">Catagory Name</label>
                                <input type="text" class="form-control rounded" id="catagory" placeholder="Catagory Name">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control rounded" id="title" placeholder="Title">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-secondary">ADD</button>
                            </div> 
                        </div>
                    </div> 
                    @elseif(Request::is('catagory'))
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 order-md-1 order-lg-1 order-sm-2">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>First</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>First</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>First</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>First</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 order-md-2 order-lg-2 order-sm-1 mb-2">
                            <div class="mb-3">
                                <label for="catagory" class="form-label">Catagory Name</label>
                                <input type="text" class="form-control rounded" id="catagory" placeholder="Catagory Name">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-secondary">ADD</button>
                            </div> 
                        </div>
                    </div> 
                    @elseif(Request::is('blogs'))
                    {{ __("Blog") }}    
                    @elseif(Request::is('messages'))
                    {{ __("Contact Message") }}
                    @else
                    {{ __("Dashboard") }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
