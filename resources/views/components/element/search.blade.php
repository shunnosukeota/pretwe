<div class="p-4">
    <form action="{{ route('tweet.search') }}" method="GET">
        <div class="mt-3">
            <div class="inline-flex text-md text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 004.875-4.875V12m6.375 5.25a4.875 4.875 0 01-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v13.5a1.5 1.5 0 001.5 1.5zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 013.182 3.182zM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 113.182-3.182z" />
                </svg>
                <p class="ml-1">おくりもの ⇆ もらいもの</span></p>
            </div>
            <select name="keyword_g"
                    class="w-full text-center focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500 text-center">
                <option value="未選択">未選択</option>
                <option value="おくりもの">おくりもの</option>
                <option value="もらいもの">もらいもの</option>
            </select>
        </div>
        <div class="mt-3">
            <div class="inline-flex text-md text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <p class="ml-1">お相手</p>
            </div>
            <select name="keyword_r"
                    class="w-full text-center focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500 text-center">
                <option value="未選択">未選択</option>
                <option value="女友達（同性）">女友達（同性）</option>
                <option value="男友達（同性）">男友達（同性）</option>
                <option value="女友達（異性）">女友達(異性)</option>
                <option value="男友達（異性）">男友達（異性）</option>
                <option value="彼女">彼女</option>
                <option value="彼氏">彼氏</option>
                <option value="妻">妻</option>
                <option value="夫">夫</option>
                <option value="母親">母親</option>
                <option value="父親">父親</option>
                <option value="祖母">祖母</option>
                <option value="祖父">祖父</option>
                <option value="姉">姉</option>
                <option value="兄">兄</option>
                <option value="妹">妹</option>
                <option value="弟">弟</option>
                <option value="息子">息子</option>
                <option value="娘">娘</option>
                <option value="叔母">叔母</option>
                <option value="叔父">叔父</option>
                <option value="姪">姪</option>
                <option value="甥">甥</option>
                <option value="従姉妹">従姉妹</option>
                <option value="従兄弟">従兄弟</option>
                <option value="再従姉妹">再従姉妹</option>
                <option value="再従兄弟">再従兄弟</option>
                <option value="親戚女性">親戚女性</option>
                <option value="親戚男性">親戚男性</option>
                <option value="先輩女性">先輩女性</option>
                <option value="先輩男性">先輩男性</option>
                <option value="上司女性">上司女性</option>
                <option value="上司男性">上司男性</option>
                <option value="後輩女性">後輩女性</option>
                <option value="後輩男性">後輩男性</option>
                <option value="部下女性">部下女性</option>
                <option value="部下男性">部下男性</option>
                <option value="同僚女性">同僚女性</option>
                <option value="同僚男性">同僚男性</option>
                <option value="同僚">同僚</option>
                <option value="取引先女性">取引先女性</option>
                <option value="取引先男性">取引先男性</option>
                <option value="女性先生">女性先生</option>
                <option value="男性先生">男性先生</option>
                <option value="隣人">隣人</option>
                <option value="自分">自分</option>
                <option value="ペット">ペット</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="mt-3">
            <div class="inline-flex text-md text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>
                <p class="ml-1">お相手の年齢</p>
            </div>
            <input type="number" name="keyword_a" min="0"
                    class="w-full text-center focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500"
                    placeholder="お相手の年齢を入力">
        </div>
        <div class="my-3">
            <div class="inline-flex text-md text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>            
                <p class="ml-1">シチュエーション</p>
            </div>
            <select name="keyword_s"
                    class="w-full text-center focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500">
                <option value="未選択">未選択</option>
                    <option value="なんとなく">なんとなく</option>
                    <option value="誕生日">誕生日</option>
                    <option value="クリスマス">クリスマス</option>
                    <option value="バレンタイン">バレンタイン</option>
                    <option value="ホワイトデー">ホワイトデー</option>
                    <option value="記念日(0~1年)">記念日(0~1年)</option>
                    <option value="記念日(1~3年)">記念日(1~3年)</option>
                    <option value="記念日(3年~)">記念日(3年~)</option>
                    <option value="結婚記念日">結婚記念日</option>
                    <option value="プロポーズ">プロポーズ</option>
                    <option value="母の日">母の日</option>
                    <option value="父の日">父の日</option>
                    <option value="敬老の日">敬老の日</option>
                    <option value="親孝行">親孝行</option>
                    <option value="お中元">お中元</option>                
                    <option value="お歳暮">お歳暮</option>
                    <option value="餞別">餞別</option>
                    <option value="結婚祝い">結婚祝い</option>
                    <option value="出産祝い">出産祝い</option>
                    <option value="入学祝い">入学祝い</option>
                    <option value="卒業祝い">卒業祝い</option>
                    <option value="合格祝い">合格祝い</option>
                    <option value="内定祝い">内定祝い</option>
                    <option value="就職祝い">就職祝い</option>
                    <option value="新築祝い">新築祝い</option>
                    <option value="昇進祝い">昇進祝い</option>
                    <option value="退職祝い">退職祝い</option>
                    <option value="還暦祝い">還暦祝い</option>
                    <option value="成人祝い">成人祝い</option>
                    <option value="手土産">手土産</option>
                    <option value="お見舞い">お見舞い</option>            
                    <option value="サプライズ">サプライズ</option>
                    <option value="ご褒美">ご褒美</option>
                    <option value="自分へのご褒美">自分へのご褒美</option>
                    <option value="パーティー">パーティー</option>
                    <option value="引き出物">引き出物</option>
                    <option value="謝罪">謝罪</option>
                    <option value="その他">その他</option>
            </select>
        </div>
        <div>
            <div class="inline-flex text-md text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                </svg>
                <p class="ml-1">キーワード</p>
            </div>
            <input type="text" name="keyword" placeholder="キーワードを入力"
                    class="mt-3 focus:ring-yellow-400 focus:border-yellow-400 mt-1 block w-full sm:text-sm text-center border border-gray-300 rounded-md p-2">
        </div>
        <div class="py-4 flex flex-wrap justify-end">
            <x-element.button>
                検索
            </x-element.button>
        </div>
        
    </form>
</div>

@once
@push('css')
    <style>
        .search > summary {
            list-style: none;
            cursor: pointer;
        }
        .search[open] > summary::before {
            
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            display: block;
            content: "";
            background: transparent;
        }
    </style>
@endpush
@endonce