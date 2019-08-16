@extends('layouts.base')
@section('section')
    <section class="item-content">
        <div class="container">
            <div class="row">
                <div class="comment-form">
                    <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                        <h3>Post Something</h3>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="Name">Title:</label>
                                <input type="text" class="form-control" id="Name" name="judul">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="Name">Category:</label>
                                <select class="form-control" name="id_kategori">
                                    @foreach($kategori as $item)
                                        <option value="{{$item->id}}">
                                            {{$item->kategori}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="textarea col-sm-12">
                                <label for="Name">Your Article:</label>
                                <textarea name="artikel">

                                </textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="email">Tag 1</label>
                                <input type="text" class="form-control" id="email" name="tag1">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="email">Tag 2</label>
                                <input type="text" class="form-control" id="email" name="tag2">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="email">Tag 3</label>
                                <input type="text" class="form-control" id="email" name="tag3">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="email">Image</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="col-sm-12">
                                <div class="comment-btn">
                                    <button type="submit" class="btn-white btn-red">
                                        Submit Content
                                    </button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
