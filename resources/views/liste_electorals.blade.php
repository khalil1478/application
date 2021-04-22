@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="
    background-color: beige; "> liste des electorals </div>

                    <div class="card-body" >


                        <form  class="col-md-4"  method="POST" action="{{URL::to('/importlists')}}"   enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="file" class="form-control " name="file"  ><br>

                            <button type="submit" class="btn btn-primary ">import </button>

                            <a href=" {{URL::to('/exportlists')}} " class="btn btn-secondary ">Export </a>
                        </form>

                        <div class="card-body" >

                        </div>
                        <table class="table" class="col-md-6"  >
                            <thead>
                            <tr>

                                <th scope="col">عددالاوراق الملغاة</th>
                                <th scope="col">عدد الاوراق البيضاء</th>
                                <th scope="col">مجموع اصوات القائمات</th>
                                <th scope="col">عدد القائمات</th>
                                <th scope="col">circonscription</th>
                                <th scope="col">عددالمقاعد</th>




                            @foreach($listsdonnes as $listsdonne)

                                <tr>
                                    <td>{{$listsdonne->Bultain_Annulees}}</td>
                                    <td>{{$listsdonne->Bultain_Blancs}}</td>
                                    <td>{{$listsdonne->Total_Voix_List}}</td>
                                    <td>{{$listsdonne->Nombre_Listes}}</td>
                                    <td>{{$listsdonne->circonscription}}</td>
                                    <td>{{$listsdonne->nbr_sieges}}</td>

                        </table>
                        <table class="table" class="col-md-6"  >
                            <thead>
                            <tr>
                                <th scope="col">Total des voix</th>
                                <th scope="col">Total des voix par siège </th>
                                <th scope="col">Total des nombres voix par siège </th>
                                <th scope="col">total des version proposées </th>
                                <th scope="col">total des version actuelles </th>
                                <th scope="col">total des siege complimentaires </th>
                                <th scope="col">total des quotion electoral </th>
                                <th scope="col">total des restes electoral </th>

                            </tr>
                            </thead>
                            <tbody>
                            <td>{{$listsdonne->Total_Voix}}</td>
                            <td>{{$listsdonne->Total_Voix_Siege}}</td>
                            <td>{{$listsdonne->nbr_voix_siege}}</td>
                            <td>{{$listsdonne->total_version_proposee}}</td>
                            <td>{{$listsdonne->total_version_actuelle}}</td>
                            <td>{{$listsdonne->total_siege_complimentaire}}</td>
                            <td>{{$listsdonne->total_quotion_electoral}}</td>
                            <td>{{$listsdonne->total_reste_electoral}}</td>
                            </tr>

                            @endforeach

                            </tbody>

                        </table>
                        <table class="table">
                            <thead>
                            <tr>

                                <th scope="col">id</th>
                                <th scope="col">nom_liste</th>
                                <th scope="col">nb_voix</th>
                                <th scope="col">siege_complimentaire</th>
                                <th scope="col">%</th>
                                <th scope="col">nombre de siège</th>
                                <th scope="col">version_proposee</th>
                                <th scope="col">version actuelle</th>
                                <th scope="col">Quotion electoral</th>
                                <th scope="col">Reste electoral</th>

                            </tr>
                            </thead>
                            <tbody>



                            @foreach($lists as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->nom_liste}}</td>
                                    <td>{{$list->nb_voix}}</td>
                                    <td>{{$list->siege_complimentaire}}</td>
                                    <td>{{round(($list->pourcentage),2)."%"}}</td>
                                    <td>{{(int)$list->nbr_siege_obtenu}}</td>
                                    <td>{{(int)$list->version_proposee}}</td>
                                    <td>{{$list->version_actuelle}}</td>
                                    <td>{{(int)$list->quotion_electoral}}</td>
                                    <td>{{$list->reste_electoral}}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>





                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
