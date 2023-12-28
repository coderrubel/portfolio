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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <th>Catagory</th>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloribus omnis nobis ipsum perferendis est?</th>
                                        <th>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis impedit ex numquam enim. Veniam molestias, quam fugit eaque pariatur id velit neque cumque, quisquam necessitatibus rem provident sed suscipit aperiam? Necessitatibus dolore omnis enim magni, laborum dicta totam, cumque eos perspiciatis unde nesciunt! Distinctio, vel! Repellendus officia amet sed.</th>
                                        <th><button type="submit" class="btn btn-outline-info btn-sm mb-2">Edit</button><br><button type="submit" class="btn btn-outline-danger btn-sm">Delete</button></th>
                                    </tr>
                                    <tr class="text-left">
                                        <th>Catagory</th>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloribus omnis nobis ipsum perferendis est?</th>
                                        <th>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis impedit ex numquam enim. Veniam molestias, quam fugit eaque pariatur id velit neque cumque, quisquam necessitatibus rem provident sed suscipit aperiam? Necessitatibus dolore omnis enim magni, laborum dicta totam, cumque eos perspiciatis unde nesciunt! Distinctio, vel! Repellendus officia amet sed.</th>
                                        <th><button type="submit" class="btn btn-outline-info btn-sm mb-2">Edit</button><br><button type="submit" class="btn btn-outline-danger btn-sm">Delete</button></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 order-md-2 order-lg-2 order-sm-1 mb-2">
                            <div class="mb-3">
                                <input class="form-control" list="datalistOptions" placeholder="Select Catagory">
                                <datalist id="datalistOptions">
                                    <option value="San Francisco">
                                    <option value="New York">
                                    <option value="Seattle">
                                    <option value="Los Angeles">
                                    <option value="Chicago">
                                </datalist>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control rounded" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Type Details"></textarea>
                                    <label for="details">Details</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input class="form-control border border-lite p-1 rounded" type="file">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-success btn-sm">ADD</button>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>First</th>
                                        <th><button type="submit" class="btn btn-outline-info btn-sm mb-2">Edit</button><br><button type="submit" class="btn btn-outline-danger btn-sm">Delete</button></th>
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
                                <button type="submit" class="btn btn-outline-success">Add</button>
                            </div> 
                        </div>
                    </div> 
                    @elseif(Request::is('blogs'))
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr class="text-center">
                                        <th>Name/Date</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <th>Rubel<br><small class="text-left">Date: 11-01-2024</small></th>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloribus omnis nobis ipsum perferendis est?</th>
                                        <th>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis impedit ex numquam enim. Veniam molestias, quam fugit eaque pariatur id velit neque cumque, quisquam necessitatibus rem provident sed suscipit aperiam? Necessitatibus dolore omnis enim magni, laborum dicta totam, cumque eos perspiciatis unde nesciunt! Distinctio, vel! Repellendus officia amet sed.</th>
                                        <th><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></th>
                                    </tr>
                                    <tr class="text-left">
                                        <th>rubel.ali@sebpo.com<br><small class="text-left">Date: 11-01-2024</small></th>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloribus omnis nobis ipsum perferendis est?</th>
                                        <th>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis impedit ex numquam enim. Veniam molestias, quam fugit eaque pariatur id velit neque cumque, quisquam necessitatibus rem provident sed suscipit aperiam? Necessitatibus dolore omnis enim magni, laborum dicta totam, cumque eos perspiciatis unde nesciunt! Distinctio, vel! Repellendus officia amet sed.</th>
                                        <th><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    @elseif(Request::is('messages'))
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr class="text-center">
                                        <th>E-Mail</th>
                                        <th>Subject</th>
                                        <th>Messages</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <th>rubel.ali@sebpo.com<br><small class="text-left">Date: 11-01-2024</small></th>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloribus omnis nobis ipsum perferendis est?</th>
                                        <th>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis impedit ex numquam enim. Veniam molestias, quam fugit eaque pariatur id velit neque cumque, quisquam necessitatibus rem provident sed suscipit aperiam? Necessitatibus dolore omnis enim magni, laborum dicta totam, cumque eos perspiciatis unde nesciunt! Distinctio, vel! Repellendus officia amet sed.</th>
                                        <th><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></th>
                                    </tr>
                                    <tr class="text-left">
                                        <th>rubel.ali@sebpo.com<br><small class="text-left">Date: 11-01-2024</small></th>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloribus omnis nobis ipsum perferendis est?</th>
                                        <th>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis impedit ex numquam enim. Veniam molestias, quam fugit eaque pariatur id velit neque cumque, quisquam necessitatibus rem provident sed suscipit aperiam? Necessitatibus dolore omnis enim magni, laborum dicta totam, cumque eos perspiciatis unde nesciunt! Distinctio, vel! Repellendus officia amet sed.</th>
                                        <th><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                    {{ __("Dashboard") }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
