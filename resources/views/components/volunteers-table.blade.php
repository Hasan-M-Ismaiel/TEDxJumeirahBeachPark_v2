@props(['volunteers'])

<!--this is for searched skills result-->
<div id="searchedSkillsTable" class="mt-4">
</div>

<!--this is for sorted skills result-->
<div id="sortedSkillsTableSorted" class="mt-4">
</div>

<!--this is for basic skills result-->
<div id="sortedSkillsTable" class="mt-4">
<table class="table table-striped mt-2 border">
    <thead>
        <tr>
            <th scope="col" class="align-middle" id="pcreateProject">#</th>
            <th scope="col" class="align-middle" id="pcreateProject">First Name</th>
            <th scope="col" class="align-middle" id="pcreateProject">Last Name</th>
            <th scope="col" class="align-middle" id="pcreateProject">Joined</th>
            <th scope="col" class="align-middle" id="pcreateProject">Phone</th>
            <th scope="col" class="align-middle" id="pcreateProject">Email</th>
            <th scope="col" class="align-middle" id="pcreateProject">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($volunteers as $volunteer)
            <tr>
                <!--volunteer id-->
                <th scope="row" class="align-middle">{{ $volunteer->id }}</th>
                
                <!--volunteer first name-->
                <td class="align-middle"><a href="{{ route('admin.volunteers.show', $volunteer->id) }}" style="text-decoration: none;" >{{ $volunteer->first_name }} </a></td>
                
                <!--volunteer last name-->
                <td class="align-middle">{{ $volunteer->last_name }}</td>
               
                <!--volunteer joined-->
                <td class="align-middle">{{ $volunteer->created_at->diffForHumans() }}</td>

                <!--volunteer phone-->
                <td class="align-middle">{{ $volunteer->phone_number }}</td>
            
                <!--volunteer email-->
                <td class="align-middle">{{ $volunteer->email }}</td>
                            
                <!--controll buttons-->
                <td class="align-middle">
                    <div style="display: flex;" class="d-flex">
                        
                        <!--show volunteer information-->
                        <a type="button" class="m-1 d-flex justify-content-center" href="{{ route('admin.volunteers.show', $volunteer->id) }}"data-bs-toggle="tooltip" data-bs-placement="top" title="show volunteer information">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>
                        </a>

                        <!--edit volunteer information-->
                        <a type="button" class="m-1 d-flex justify-content-center " href="{{ route('admin.volunteers.edit', $volunteer->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="edit volunteer information">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>

                        <!--delete volunteer form the database-->
                        <a type="button" class="m-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete" data-bs-toggle="tooltip" data-bs-placement="top" title="delete volunteer from the system">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16"
                                    onclick="if (confirm('Are you sure?') == true) {
                                                        document.getElementById('delete-item-{{$volunteer->id}}').submit();
                                                        event.preventDefault();
                                                    } else {
                                                        return;
                                                    }
                                                    ">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                            </svg>
                        </a>

                        <!-- for the delete -->
                        <form id="delete-item-{{$volunteer->id}}" action="{{ route('admin.volunteers.destroy', $volunteer) }}" class="d-none" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>