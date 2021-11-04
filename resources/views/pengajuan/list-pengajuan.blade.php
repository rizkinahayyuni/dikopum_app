@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
    <div class="container">
        <div class="alert alert-success">
            <h3><i class="fa fa-check-circle"></i> &nbsp;Pengajuan SKU</h3>
            <p>&emsp;&ensp;{{$message}}</p>
        </div>
    </div>
    @endif
   <div class="container bg-white pt-4 pb-4">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nama Pengaju</th>
                <th scope="col">Tanggal Pengaju</th>
                <th scope="col">Nama Usaha</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($pengajuan as $p)
                    <?php
                     $day = date('l',strtotime($p->data_diri->tanggal_pengajuan));
                     $date = date('d F Y', strtotime($p->data_diri->tanggal_pengajuan));
                    ?>
                    <tr>
                        <td>{{$p->data_diri->nama_pengaju}}</td>
                        <td>{{$day}} , {{$date}}</td>
                        <td>{{$p->usaha->nama_usaha}}</td>
                        <td><a href="{{route('detail-pengajuan.show',$p->id_pengajuan)}}">Detail &nbsp;
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5861 4.66206C12.3308 2.21275 9.84562 0.555573 7.00001 0.555573C4.1544 0.555573 1.66852 2.21391 0.413887 4.66229C0.360933 4.76704 0.333344 4.88277 0.333344 5.00014C0.333344 5.11751 0.360933 5.23324 0.413887 5.33799C1.66921 7.7873 4.1544 9.44448 7.00001 9.44448C9.84562 9.44448 12.3315 7.78614 13.5861 5.33776C13.6391 5.23301 13.6667 5.11728 13.6667 4.99991C13.6667 4.88254 13.6391 4.76681 13.5861 4.66206ZM7.00001 8.33337C6.34074 8.33337 5.69627 8.13787 5.14811 7.7716C4.59994 7.40532 4.1727 6.88473 3.92041 6.27564C3.66811 5.66655 3.6021 4.99633 3.73072 4.34972C3.85934 3.70312 4.17681 3.10917 4.64298 2.643C5.10916 2.17682 5.7031 1.85935 6.34971 1.73074C6.99631 1.60212 7.66654 1.66813 8.27562 1.92042C8.88471 2.17271 9.40531 2.59996 9.77158 3.14812C10.1379 3.69629 10.3334 4.34075 10.3334 5.00003C10.3336 5.43783 10.2475 5.87138 10.08 6.27589C9.91261 6.68041 9.66708 7.04796 9.35751 7.35753C9.04794 7.6671 8.68039 7.91262 8.27588 8.08006C7.87136 8.2475 7.43781 8.33358 7.00001 8.33337ZM7.00001 2.7778C6.80166 2.78057 6.60459 2.81008 6.41413 2.86553C6.57113 3.07888 6.64646 3.34143 6.62648 3.60557C6.6065 3.8697 6.49252 4.11793 6.30522 4.30523C6.11791 4.49254 5.86968 4.60652 5.60555 4.6265C5.34142 4.64648 5.07887 4.57114 4.86552 4.41414C4.74403 4.86174 4.76596 5.33616 4.92822 5.77063C5.09048 6.2051 5.38491 6.57775 5.77006 6.83613C6.1552 7.09451 6.61168 7.2256 7.07523 7.21096C7.53879 7.19631 7.98608 7.03667 8.35415 6.7545C8.72222 6.47233 8.99254 6.08184 9.12706 5.63799C9.26157 5.19414 9.25352 4.71928 9.10402 4.28025C8.95452 3.84122 8.67111 3.46012 8.29368 3.1906C7.91624 2.92108 7.46379 2.77671 7.00001 2.7778Z" fill="#C23436"/>
                            </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

   </div>
@endsection
