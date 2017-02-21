<svg xmlns="http://www.w3.org/2000/svg" width="{{ $width + 80 }}" height="20">
    <linearGradient id="b" x2="0" y2="100%">
        <stop offset="0" stop-color="#bbb" stop-opacity=".1"/>
        <stop offset="1" stop-opacity=".1"/>
    </linearGradient>
    <clipPath id="a">
        <rect width="{{ $width + 80 }}" height="20" rx="3" fill="#fff"/>
    </clipPath>
    <g clip-path="url(#a)">
        <path fill="#555" d="M0 0h69v20H0z"/>
        <path fill="#4c1" d="M69 0h{{ $width + 11 }}v20H69z"/>
        <path fill="url(#b)" d="M0 0h{{ $width + 80 }}v20H0z"/>
    </g>
    <g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="11">
        <text x="34.5" y="15" fill="#010101" fill-opacity=".3">downloads</text>
        <text x="34.5" y="14">downloads</text>
        <text x="{{ 80 + $width / 2 }}" y="15" fill="#010101" fill-opacity=".3">{{ $text }}</text>
        <text x="{{ 80 + $width / 2 }}" y="14">{{ $text }}</text>
    </g>
</svg>