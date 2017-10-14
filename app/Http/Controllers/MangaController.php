<?php

namespace App\Http\Controllers;

use App\comment;
use App\Comments;
use App\manga;
use App\tome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createComment($id)
    {

        return view('createComment',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeComment(Request $request)
    {
        $this->validate($request,
            [
                'comment' => 'required',
            ],
            [
                'comment.require' => 'Veuillez ajouter un commentaire pour le poster',
            ]
        );
        comment::create(
            [
                'user_id' => Auth::user()->id,
                'manga_id' => $request->idManga,
                'comment' => $request->comment,
            ]
        );
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $manga = manga::find($id);
        $manga->tomeCurrent = tome::select(['nbPages','chapter'])->where('manga_id', '=', $id)->orderBy('chapter', 'DESC')->first();
        $manga->pageCurrent = 0;
        $manga->pageCurrentDisplayed = '00';

        $allComments = comment::all()->where('manga_id', '=', $id);

        $mangaTomes = tome::all()->where('manga_id', '=', $id);

        return view('show',compact(['id','manga', 'allComments','mangaTomes']));
    }

    public function showWithPage($id,$chapter,$pages)
    {
        if($pages < 10){
            $pages = '0'.$pages;
        }

        $manga = manga::find($id);
        $manga->tomeCurrent = tome::select('nbPages')->where('manga_id', '=', $id)->where('chapter', '=', $chapter)->first();
        $manga->tomeCurrent->chapter = $chapter;
        $manga->pageCurrent =  intval( $pages );
        $manga->pageCurrentDisplayed = $pages;

        $allComments = comment::all()->where('manga_id', '=', $id);
        $mangaTomes = tome::all()->where('manga_id', '=', $id);

        return view('show',compact(['id','manga', 'allComments','mangaTomes']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
