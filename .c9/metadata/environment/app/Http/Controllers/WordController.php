{"filter":false,"title":"WordController.php","tooltip":"/app/Http/Controllers/WordController.php","undoManager":{"mark":30,"position":30,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":61},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["public function index()","    {","        $users = User::all();","        return view('users.index' , compact('users'));","    }"],"id":62}],[{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"remove","lines":["s"],"id":63},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"remove","lines":["r"]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"remove","lines":["e"]},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"remove","lines":["s"]},{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"remove","lines":["u"]}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["w"],"id":64},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["o"]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["r"]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["d"]},{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":["s"]}],[{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"remove","lines":["r"],"id":65},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"remove","lines":["e"]},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"remove","lines":["s"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"remove","lines":["U"]}],[{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["W"],"id":66},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["o"]},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":["r"]},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["d"]}],[{"start":{"row":11,"column":26},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":12,"column":0},"end":{"row":12,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":8},"action":"remove","lines":["    "],"id":68},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":26},"end":{"row":12,"column":0},"action":"remove","lines":["",""]},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"remove","lines":["s"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"remove","lines":["r"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"remove","lines":["e"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["s"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"remove","lines":["u"]}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["w"],"id":69},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["o"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["r"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["d"]},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["r"],"id":70},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"remove","lines":["e"]},{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"remove","lines":["s"]},{"start":{"row":11,"column":45},"end":{"row":11,"column":46},"action":"remove","lines":["u"]}],[{"start":{"row":11,"column":45},"end":{"row":11,"column":46},"action":"insert","lines":["w"],"id":71},{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"insert","lines":["o"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"insert","lines":["r"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"insert","lines":["d"]}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":72}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":20},"action":"insert","lines":["use App\\Models\\Word;"],"id":73}],[{"start":{"row":13,"column":5},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":74},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":33,"column":5},"action":"insert","lines":[" public function create()","    {","        return view('words.create');","    }","","    public function store(Request $request)","    {","        $request->validate([","            'word' => 'required',","            'meaning' => 'required',","        ]);","","        Word::create([","            'word' => $request->word,","            'meaning' => $request->meaning,","        ]);","","        return redirect()->route('words.create')->with('success', '単語が作成されました。');","    }"],"id":75}],[{"start":{"row":33,"column":5},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":76},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":4},"end":{"row":35,"column":0},"action":"insert","lines":["",""]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":35,"column":4},"end":{"row":40,"column":0},"action":"insert","lines":["public function index()","{","    $words = Word::all(); // 単語一覧を取得する方法に応じて変更してください","    return view('words.index', compact('words'));","}",""],"id":77}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "],"id":78},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":35,"column":4},"end":{"row":39,"column":5},"action":"remove","lines":["    public function index()","    {","        $words = Word::all(); // 単語一覧を取得する方法に応じて変更してください","        return view('words.index', compact('words'));","    }"],"id":79},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"remove","lines":["    "]},{"start":{"row":34,"column":8},"end":{"row":35,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":33,"column":5},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":81},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":4},"end":{"row":35,"column":0},"action":"insert","lines":["",""]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":5,"column":20},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":83}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":20},"action":"insert","lines":["use App\\Models\\Word;"],"id":84}],[{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":[";"],"id":85},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["d"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["r"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["o"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["W"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["\\"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["s"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["l"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"remove","lines":["e"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"remove","lines":["d"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"remove","lines":["o"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"remove","lines":["M"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"remove","lines":["\\"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["p"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"remove","lines":["p"]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":["A"],"id":86},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"remove","lines":[" "]},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"remove","lines":["e"]},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"remove","lines":["s"]},{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"remove","lines":["u"]},{"start":{"row":5,"column":20},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":35,"column":4},"end":{"row":39,"column":1},"action":"insert","lines":["public function index()","{","    $words = Word::take(10)->get();","    return view('words.index', ['words' => $words]);","}"],"id":87}],[{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "],"id":88},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":13,"column":5},"action":"remove","lines":["public function index()","    {","        $words = Word::all();","        return view('words.index' , compact('words'));","    }"],"id":89},{"start":{"row":9,"column":4},"end":{"row":13,"column":1},"action":"insert","lines":["public function index()","{","    $words = Word::take(10)->get();","    return view('words.index', compact('words'));","}"]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":90},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"remove","lines":[" "],"id":91}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"remove","lines":["    "],"id":92}],[{"start":{"row":35,"column":4},"end":{"row":39,"column":5},"action":"remove","lines":["    public function index()","    {","        $words = Word::take(10)->get();","        return view('words.index', ['words' => $words]);","    }"],"id":93},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"remove","lines":["    "]},{"start":{"row":34,"column":4},"end":{"row":35,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":89.40910923645092,"scrollleft":0,"selection":{"start":{"row":34,"column":4},"end":{"row":34,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":4,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1708249851487,"hash":"ed623f00ce3c43865d48777cb342f9e75d8e3b32"}