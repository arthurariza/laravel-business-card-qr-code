<x-layout>
    <div>
        Hello, my name is {{ $businessCard->name }}
    </div>

    <div>
        <h1>My History</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elementum nulla sem, a efficitur ante
            imperdiet id. Mauris euismod erat vel velit mollis tristique. In dolor turpis, semper ac dui sed, dignissim
            tempor purus. Aliquam tempor libero vitae dignissim placerat. Curabitur maximus erat ac massa rutrum
            egestas. Maecenas vel nisi a lacus sollicitudin feugiat. Donec suscipit leo ac felis maximus, vel
            consectetur massa pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus.
        </p>
        <p>
            Praesent leo tellus, mattis iaculis lectus a, pellentesque gravida erat. Vestibulum tristique mi quis purus
            tincidunt sollicitudin. Integer blandit vulputate sem non condimentum. Pellentesque vehicula, dui eget
            laoreet auctor, ante nulla egestas nibh, ac molestie justo nulla vitae nibh. Nam fringilla rutrum felis in
            posuere. Ut sed condimentum est, aliquet convallis nibh. Vestibulum ipsum purus, laoreet vitae erat a,
            aliquam mollis turpis.
        </p>
        <p>
            Nullam vestibulum gravida turpis ac condimentum. Pellentesque risus lacus, elementum sed tellus nec,
            facilisis luctus nulla. Vestibulum a ex eu nisi luctus aliquam eu ac lacus. Morbi lobortis leo ut nulla
            rhoncus sagittis. Sed auctor metus vitae odio commodo, et efficitur dolor tempus. Quisque vitae lobortis
            augue. Fusce consectetur dolor et molestie eleifend. Phasellus in congue lacus, et posuere augue. Sed id
            nisl eget purus aliquam consequat non eget velit. Nunc non dolor sit amet lacus sodales gravida sit amet sed
            odio. Suspendisse quis tortor laoreet, posuere quam non, tincidunt libero. Maecenas vitae felis ac sapien
            lacinia cursus non non risus. Sed ut nisl nunc.
        </p>
    </div>

    <div>
        <button>
            <a href="{{ $businessCard->github_url }}" target="_blank">Github</a>
        </button>
        <button>
            <a href="{{ $businessCard->linkedin_url }}" target="_blank">LinkedIn</a>
        </button>
    </div>
</x-layout>
