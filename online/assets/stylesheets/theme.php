<style>
:root {
--blue:#0179a8;
--indigo:<?= $themeColor; ?>;
--purple:#5f4b8b;
--pink:#ff0538;
--red:#ea6759;
--orange:#ec935e;
--yellow:#f7c46c;
--green:#a7c796;
--teal:#097b0a;
--cyan:#3686a0;
--white:#fff;
--gray:#888c9b;
--gray-dark:#222230;
--primary:<?= $themeColor; ?>;
--secondary:#f6f7f9;
--success:#097b0a;
--info:#0179a8;
--warning:#f7c46c;
--danger:#ff0538;
--light:#f6f7f9;
--dark:#222230;
--breakpoint-xs:0;
--breakpoint-sm:576px;
--breakpoint-md:768px;
--breakpoint-lg:992px;
--breakpoint-xl:1200px;
--font-family-sans-serif:-apple-system, BlinkMacSystemFont, "Fira Sans", "Helvetica Neue", "Apple Color Emoji", sans-serif;
--font-family-monospace:SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
}
*, :after, :before {
	box-sizing: border-box
}
html {
	font-family: sans-serif;
	line-height: 1.15;
	-webkit-text-size-adjust: 100%;
	-webkit-tap-highlight-color: rgba(20,20,31,0)
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
	display: block
}
body {
	margin: 0;
	font-family: -apple-system, BlinkMacSystemFont, Fira Sans, Helvetica Neue, Apple Color Emoji, sans-serif;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	color: #363642;
	text-align: left;
	background-color: #f6f7f9
}
[tabindex="-1"]:focus:not(:focus-visible) {
	outline: 0!important
}
hr {
	box-sizing: content-box;
	height: 0;
	overflow: visible
}
h1, h2, h3, h4, h5, h6 {
	margin-top: 0;
	margin-bottom: .5rem
}
p {
	margin-top: 0;
	margin-bottom: 1rem
}
abbr[data-original-title], abbr[title] {
	text-decoration: underline;
	-webkit-text-decoration: underline dotted;
	text-decoration: underline dotted;
	cursor: help;
	border-bottom: 0;
	-webkit-text-decoration-skip-ink: none;
	text-decoration-skip-ink: none
}
address {
	font-style: normal;
	line-height: inherit
}
address, dl, ol, ul {
	margin-bottom: 1rem
}
dl, ol, ul {
	margin-top: 0
}
ol ol, ol ul, ul ol, ul ul {
	margin-bottom: 0
}
dt {
	font-weight: 700
}
dd {
	margin-bottom: .5rem;
	margin-left: 0
}
blockquote {
	margin: 0 0 1rem
}
b, strong {
	font-weight: bolder
}
small {
	font-size: 80%
}
sub, sup {
	position: relative;
	font-size: 75%;
	line-height: 0;
	vertical-align: baseline
}
sub {
	bottom: -.25em
}
sup {
	top: -.5em
}
a {
	color: <?= $themeColor; ?>;
	text-decoration: none;
	background-color: transparent
}
a:hover {
	color: #234875;
	text-decoration: underline
}
a:not([href]), a:not([href]):hover {
	color: inherit;
	text-decoration: none
}
code, kbd, pre, samp {
	font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
	font-size: 1em
}
pre {
	margin-top: 0;
	margin-bottom: 1rem;
	overflow: auto;
	-ms-overflow-style: scrollbar
}
figure {
	margin: 0 0 1rem
}
img {
	border-style: none
}
img, svg {
	vertical-align: middle
}
svg {
	overflow: hidden
}
table {
	border-collapse: collapse
}
caption {
	padding-top: .75rem;
	padding-bottom: .75rem;
	color: #888c9b;
	text-align: left;
	caption-side: bottom
}
th {
	text-align: inherit
}
label {
	display: inline-block;
	margin-bottom: .5rem
}
button {
	border-radius: 0
}
button:focus {
	outline: 1px dotted;
	outline: 5px auto -webkit-focus-ring-color
}
button, input, optgroup, select, textarea {
	margin: 0;
	font-family: inherit;
	font-size: inherit;
	line-height: inherit
}
button, input {
	overflow: visible
}
button, select {
	text-transform: none
}
[role=button] {
	cursor: pointer
}
select {
	word-wrap: normal
}
[type=button], [type=reset], [type=submit], button {
	-webkit-appearance: button
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
	cursor: pointer
}
[type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
padding:0;
border-style:none
}
input[type=checkbox], input[type=radio] {
	box-sizing: border-box;
	padding: 0
}
textarea {
	overflow: auto;
	resize: vertical
}
fieldset {
	min-width: 0;
	padding: 0;
	margin: 0;
	border: 0
}
legend {
	display: block;
	width: 100%;
	max-width: 100%;
	padding: 0;
	margin-bottom: .5rem;
	font-size: 1.5rem;
	line-height: inherit;
	color: inherit;
	white-space: normal
}
progress {
	vertical-align: baseline
}
[type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
height:auto
}
[type=search] {
	outline-offset: -2px;
	-webkit-appearance: none
}
[type=search]::-webkit-search-decoration {
-webkit-appearance:none
}
::-webkit-file-upload-button {
font:inherit;
-webkit-appearance:button
}
output {
	display: inline-block
}
summary {
	display: list-item;
	cursor: pointer
}
template {
	display: none
}
[hidden] {
	display: none!important
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
	margin-bottom: .5rem;
	font-weight: 600;
	line-height: 1.2
}
.h1, h1 {
	font-size: 2.5rem
}
.h2, h2 {
	font-size: 2rem
}
.h3, h3 {
	font-size: 1.75rem
}
.h4, h4 {
	font-size: 1.5rem
}
.h5, h5 {
	font-size: 1.25rem
}
.h6, h6 {
	font-size: 1rem
}
.lead {
	font-size: 1.25rem;
	font-weight: 400
}
.display-1 {
	font-size: 4.35rem
}
.display-1, .display-2 {
	font-weight: 300;
	line-height: 1.2
}
.display-2 {
	font-size: 3.806rem
}
.display-3 {
	font-size: 3.33rem
}
.display-3, .display-4 {
	font-weight: 300;
	line-height: 1.2
}
.display-4 {
	font-size: 2.913rem
}
hr {
	margin-top: 1rem;
	margin-bottom: 1rem;
	border: 0;
	border-top: 1px solid rgba(34,34,48,.1)
}
.small, small {
	font-size: 80%;
	font-weight: 400
}
.mark, mark {
	padding: .2em;
	background-color: #fcf8e3
}
.list-inline, .list-unstyled {
	padding-left: 0;
	list-style: none
}
.list-inline-item {
	display: inline-block
}
.list-inline-item:not(:last-child) {
	margin-right: .5rem
}
.initialism {
	font-size: 90%;
	text-transform: uppercase
}
.blockquote {
	margin-bottom: 1rem;
	font-size: 1.125rem
}
.blockquote-footer {
	display: block;
	font-size: 80%;
	color: #888c9b
}
.blockquote-footer:before {
	content: "\2014\00A0"
}
.img-fluid, .img-thumbnail {
	max-width: 100%;
	height: auto
}
.img-thumbnail {
	padding: .25rem;
	background-color: #f6f7f9;
	border: 1px solid #d6d8e1;
	border-radius: .25rem
}
.figure {
	display: inline-block
}
.figure-img {
	margin-bottom: .5rem;
	line-height: 1
}
.figure-caption {
	font-size: 90%;
	color: #888c9b
}
code {
	font-size: 87.5%;
	color: #ff0538;
	word-wrap: break-word
}
a>code {
	color: inherit
}
kbd {
	padding: .2rem .4rem;
	font-size: 87.5%;
	color: #fff;
	background-color: #363642;
	border-radius: .2rem
}
kbd kbd {
	padding: 0;
	font-size: 100%;
	font-weight: 700
}
pre {
	display: block;
	font-size: 87.5%;
	color: #191927
}
pre code {
	font-size: inherit;
	color: inherit;
	word-break: normal
}
.pre-scrollable {
	max-height: 340px;
	overflow-y: scroll
}
.container {
	width: 100%;
	padding-right: 10px;
	padding-left: 10px;
	margin-right: auto;
	margin-left: auto
}

@media (min-width:576px) {
.container {
	max-width: 540px
}
}

@media (min-width:768px) {
.container {
	max-width: 720px
}
}

@media (min-width:992px) {
.container {
	max-width: 960px
}
}

@media (min-width:1200px) {
.container {
	max-width: 1140px
}
}
.container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
	width: 100%;
	padding-right: 10px;
	padding-left: 10px;
	margin-right: auto;
	margin-left: auto
}

@media (min-width:576px) {
.container, .container-sm {
	max-width: 540px
}
}

@media (min-width:768px) {
.container, .container-md, .container-sm {
	max-width: 720px
}
}

@media (min-width:992px) {
.container, .container-lg, .container-md, .container-sm {
	max-width: 960px
}
}

@media (min-width:1200px) {
.container, .container-lg, .container-md, .container-sm, .container-xl {
	max-width: 1140px
}
}
.row {
	display: flex;
	flex-wrap: wrap;
	margin-right: -10px;
	margin-left: -10px
}
.no-gutters {
	margin-right: 0;
	margin-left: 0
}
.no-gutters>.col, .no-gutters>[class*=col-] {
	padding-right: 0;
	padding-left: 0
}
.col, .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col-auto, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-auto, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md-auto, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-auto {
	position: relative;
	width: 100%;
	padding-right: 10px;
	padding-left: 10px
}
.col {
	flex-basis: 0;
	flex-grow: 1;
	min-width: 0;
	max-width: 100%
}
.row-cols-1>* {
	flex: 0 0 100%;
	max-width: 100%
}
.row-cols-2>* {
	flex: 0 0 50%;
	max-width: 50%
}
.row-cols-3>* {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.row-cols-4>* {
	flex: 0 0 25%;
	max-width: 25%
}
.row-cols-5>* {
	flex: 0 0 20%;
	max-width: 20%
}
.row-cols-6>* {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-auto {
	flex: 0 0 auto;
	width: auto;
	max-width: 100%
}
.col-1 {
	flex: 0 0 8.333333%;
	max-width: 8.333333%
}
.col-2 {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-3 {
	flex: 0 0 25%;
	max-width: 25%
}
.col-4 {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.col-5 {
	flex: 0 0 41.666667%;
	max-width: 41.666667%
}
.col-6 {
	flex: 0 0 50%;
	max-width: 50%
}
.col-7 {
	flex: 0 0 58.333333%;
	max-width: 58.333333%
}
.col-8 {
	flex: 0 0 66.666667%;
	max-width: 66.666667%
}
.col-9 {
	flex: 0 0 75%;
	max-width: 75%
}
.col-10 {
	flex: 0 0 83.333333%;
	max-width: 83.333333%
}
.col-11 {
	flex: 0 0 91.666667%;
	max-width: 91.666667%
}
.col-12 {
	flex: 0 0 100%;
	max-width: 100%
}
.order-first {
	order: -1
}
.order-last {
	order: 13
}
.order-0 {
	order: 0
}
.order-1 {
	order: 1
}
.order-2 {
	order: 2
}
.order-3 {
	order: 3
}
.order-4 {
	order: 4
}
.order-5 {
	order: 5
}
.order-6 {
	order: 6
}
.order-7 {
	order: 7
}
.order-8 {
	order: 8
}
.order-9 {
	order: 9
}
.order-10 {
	order: 10
}
.order-11 {
	order: 11
}
.order-12 {
	order: 12
}
.offset-1 {
	margin-left: 8.333333%
}
.offset-2 {
	margin-left: 16.666667%
}
.offset-3 {
	margin-left: 25%
}
.offset-4 {
	margin-left: 33.333333%
}
.offset-5 {
	margin-left: 41.666667%
}
.offset-6 {
	margin-left: 50%
}
.offset-7 {
	margin-left: 58.333333%
}
.offset-8 {
	margin-left: 66.666667%
}
.offset-9 {
	margin-left: 75%
}
.offset-10 {
	margin-left: 83.333333%
}
.offset-11 {
	margin-left: 91.666667%
}

@media (min-width:576px) {
.col-sm {
	flex-basis: 0;
	flex-grow: 1;
	min-width: 0;
	max-width: 100%
}
.row-cols-sm-1>* {
	flex: 0 0 100%;
	max-width: 100%
}
.row-cols-sm-2>* {
	flex: 0 0 50%;
	max-width: 50%
}
.row-cols-sm-3>* {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.row-cols-sm-4>* {
	flex: 0 0 25%;
	max-width: 25%
}
.row-cols-sm-5>* {
	flex: 0 0 20%;
	max-width: 20%
}
.row-cols-sm-6>* {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-sm-auto {
	flex: 0 0 auto;
	width: auto;
	max-width: 100%
}
.col-sm-1 {
	flex: 0 0 8.333333%;
	max-width: 8.333333%
}
.col-sm-2 {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-sm-3 {
	flex: 0 0 25%;
	max-width: 25%
}
.col-sm-4 {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.col-sm-5 {
	flex: 0 0 41.666667%;
	max-width: 41.666667%
}
.col-sm-6 {
	flex: 0 0 50%;
	max-width: 50%
}
.col-sm-7 {
	flex: 0 0 58.333333%;
	max-width: 58.333333%
}
.col-sm-8 {
	flex: 0 0 66.666667%;
	max-width: 66.666667%
}
.col-sm-9 {
	flex: 0 0 75%;
	max-width: 75%
}
.col-sm-10 {
	flex: 0 0 83.333333%;
	max-width: 83.333333%
}
.col-sm-11 {
	flex: 0 0 91.666667%;
	max-width: 91.666667%
}
.col-sm-12 {
	flex: 0 0 100%;
	max-width: 100%
}
.order-sm-first {
	order: -1
}
.order-sm-last {
	order: 13
}
.order-sm-0 {
	order: 0
}
.order-sm-1 {
	order: 1
}
.order-sm-2 {
	order: 2
}
.order-sm-3 {
	order: 3
}
.order-sm-4 {
	order: 4
}
.order-sm-5 {
	order: 5
}
.order-sm-6 {
	order: 6
}
.order-sm-7 {
	order: 7
}
.order-sm-8 {
	order: 8
}
.order-sm-9 {
	order: 9
}
.order-sm-10 {
	order: 10
}
.order-sm-11 {
	order: 11
}
.order-sm-12 {
	order: 12
}
.offset-sm-0 {
	margin-left: 0
}
.offset-sm-1 {
	margin-left: 8.333333%
}
.offset-sm-2 {
	margin-left: 16.666667%
}
.offset-sm-3 {
	margin-left: 25%
}
.offset-sm-4 {
	margin-left: 33.333333%
}
.offset-sm-5 {
	margin-left: 41.666667%
}
.offset-sm-6 {
	margin-left: 50%
}
.offset-sm-7 {
	margin-left: 58.333333%
}
.offset-sm-8 {
	margin-left: 66.666667%
}
.offset-sm-9 {
	margin-left: 75%
}
.offset-sm-10 {
	margin-left: 83.333333%
}
.offset-sm-11 {
	margin-left: 91.666667%
}
}

@media (min-width:768px) {
.col-md {
	flex-basis: 0;
	flex-grow: 1;
	min-width: 0;
	max-width: 100%
}
.row-cols-md-1>* {
	flex: 0 0 100%;
	max-width: 100%
}
.row-cols-md-2>* {
	flex: 0 0 50%;
	max-width: 50%
}
.row-cols-md-3>* {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.row-cols-md-4>* {
	flex: 0 0 25%;
	max-width: 25%
}
.row-cols-md-5>* {
	flex: 0 0 20%;
	max-width: 20%
}
.row-cols-md-6>* {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-md-auto {
	flex: 0 0 auto;
	width: auto;
	max-width: 100%
}
.col-md-1 {
	flex: 0 0 8.333333%;
	max-width: 8.333333%
}
.col-md-2 {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-md-3 {
	flex: 0 0 25%;
	max-width: 25%
}
.col-md-4 {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.col-md-5 {
	flex: 0 0 41.666667%;
	max-width: 41.666667%
}
.col-md-6 {
	flex: 0 0 50%;
	max-width: 50%
}
.col-md-7 {
	flex: 0 0 58.333333%;
	max-width: 58.333333%
}
.col-md-8 {
	flex: 0 0 66.666667%;
	max-width: 66.666667%
}
.col-md-9 {
	flex: 0 0 75%;
	max-width: 75%
}
.col-md-10 {
	flex: 0 0 83.333333%;
	max-width: 83.333333%
}
.col-md-11 {
	flex: 0 0 91.666667%;
	max-width: 91.666667%
}
.col-md-12 {
	flex: 0 0 100%;
	max-width: 100%
}
.order-md-first {
	order: -1
}
.order-md-last {
	order: 13
}
.order-md-0 {
	order: 0
}
.order-md-1 {
	order: 1
}
.order-md-2 {
	order: 2
}
.order-md-3 {
	order: 3
}
.order-md-4 {
	order: 4
}
.order-md-5 {
	order: 5
}
.order-md-6 {
	order: 6
}
.order-md-7 {
	order: 7
}
.order-md-8 {
	order: 8
}
.order-md-9 {
	order: 9
}
.order-md-10 {
	order: 10
}
.order-md-11 {
	order: 11
}
.order-md-12 {
	order: 12
}
.offset-md-0 {
	margin-left: 0
}
.offset-md-1 {
	margin-left: 8.333333%
}
.offset-md-2 {
	margin-left: 16.666667%
}
.offset-md-3 {
	margin-left: 25%
}
.offset-md-4 {
	margin-left: 33.333333%
}
.offset-md-5 {
	margin-left: 41.666667%
}
.offset-md-6 {
	margin-left: 50%
}
.offset-md-7 {
	margin-left: 58.333333%
}
.offset-md-8 {
	margin-left: 66.666667%
}
.offset-md-9 {
	margin-left: 75%
}
.offset-md-10 {
	margin-left: 83.333333%
}
.offset-md-11 {
	margin-left: 91.666667%
}
}

@media (min-width:992px) {
.col-lg {
	flex-basis: 0;
	flex-grow: 1;
	min-width: 0;
	max-width: 100%
}
.row-cols-lg-1>* {
	flex: 0 0 100%;
	max-width: 100%
}
.row-cols-lg-2>* {
	flex: 0 0 50%;
	max-width: 50%
}
.row-cols-lg-3>* {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.row-cols-lg-4>* {
	flex: 0 0 25%;
	max-width: 25%
}
.row-cols-lg-5>* {
	flex: 0 0 20%;
	max-width: 20%
}
.row-cols-lg-6>* {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-lg-auto {
	flex: 0 0 auto;
	width: auto;
	max-width: 100%
}
.col-lg-1 {
	flex: 0 0 8.333333%;
	max-width: 8.333333%
}
.col-lg-2 {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-lg-3 {
	flex: 0 0 25%;
	max-width: 25%
}
.col-lg-4 {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.col-lg-5 {
	flex: 0 0 41.666667%;
	max-width: 41.666667%
}
.col-lg-6 {
	flex: 0 0 50%;
	max-width: 50%
}
.col-lg-7 {
	flex: 0 0 58.333333%;
	max-width: 58.333333%
}
.col-lg-8 {
	flex: 0 0 66.666667%;
	max-width: 66.666667%
}
.col-lg-9 {
	flex: 0 0 75%;
	max-width: 75%
}
.col-lg-10 {
	flex: 0 0 83.333333%;
	max-width: 83.333333%
}
.col-lg-11 {
	flex: 0 0 91.666667%;
	max-width: 91.666667%
}
.col-lg-12 {
	flex: 0 0 100%;
	max-width: 100%
}
.order-lg-first {
	order: -1
}
.order-lg-last {
	order: 13
}
.order-lg-0 {
	order: 0
}
.order-lg-1 {
	order: 1
}
.order-lg-2 {
	order: 2
}
.order-lg-3 {
	order: 3
}
.order-lg-4 {
	order: 4
}
.order-lg-5 {
	order: 5
}
.order-lg-6 {
	order: 6
}
.order-lg-7 {
	order: 7
}
.order-lg-8 {
	order: 8
}
.order-lg-9 {
	order: 9
}
.order-lg-10 {
	order: 10
}
.order-lg-11 {
	order: 11
}
.order-lg-12 {
	order: 12
}
.offset-lg-0 {
	margin-left: 0
}
.offset-lg-1 {
	margin-left: 8.333333%
}
.offset-lg-2 {
	margin-left: 16.666667%
}
.offset-lg-3 {
	margin-left: 25%
}
.offset-lg-4 {
	margin-left: 33.333333%
}
.offset-lg-5 {
	margin-left: 41.666667%
}
.offset-lg-6 {
	margin-left: 50%
}
.offset-lg-7 {
	margin-left: 58.333333%
}
.offset-lg-8 {
	margin-left: 66.666667%
}
.offset-lg-9 {
	margin-left: 75%
}
.offset-lg-10 {
	margin-left: 83.333333%
}
.offset-lg-11 {
	margin-left: 91.666667%
}
}

@media (min-width:1200px) {
.col-xl {
	flex-basis: 0;
	flex-grow: 1;
	min-width: 0;
	max-width: 100%
}
.row-cols-xl-1>* {
	flex: 0 0 100%;
	max-width: 100%
}
.row-cols-xl-2>* {
	flex: 0 0 50%;
	max-width: 50%
}
.row-cols-xl-3>* {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.row-cols-xl-4>* {
	flex: 0 0 25%;
	max-width: 25%
}
.row-cols-xl-5>* {
	flex: 0 0 20%;
	max-width: 20%
}
.row-cols-xl-6>* {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-xl-auto {
	flex: 0 0 auto;
	width: auto;
	max-width: 100%
}
.col-xl-1 {
	flex: 0 0 8.333333%;
	max-width: 8.333333%
}
.col-xl-2 {
	flex: 0 0 16.666667%;
	max-width: 16.666667%
}
.col-xl-3 {
	flex: 0 0 25%;
	max-width: 25%
}
.col-xl-4 {
	flex: 0 0 33.333333%;
	max-width: 33.333333%
}
.col-xl-5 {
	flex: 0 0 41.666667%;
	max-width: 41.666667%
}
.col-xl-6 {
	flex: 0 0 50%;
	max-width: 50%
}
.col-xl-7 {
	flex: 0 0 58.333333%;
	max-width: 58.333333%
}
.col-xl-8 {
	flex: 0 0 66.666667%;
	max-width: 66.666667%
}
.col-xl-9 {
	flex: 0 0 75%;
	max-width: 75%
}
.col-xl-10 {
	flex: 0 0 83.333333%;
	max-width: 83.333333%
}
.col-xl-11 {
	flex: 0 0 91.666667%;
	max-width: 91.666667%
}
.col-xl-12 {
	flex: 0 0 100%;
	max-width: 100%
}
.order-xl-first {
	order: -1
}
.order-xl-last {
	order: 13
}
.order-xl-0 {
	order: 0
}
.order-xl-1 {
	order: 1
}
.order-xl-2 {
	order: 2
}
.order-xl-3 {
	order: 3
}
.order-xl-4 {
	order: 4
}
.order-xl-5 {
	order: 5
}
.order-xl-6 {
	order: 6
}
.order-xl-7 {
	order: 7
}
.order-xl-8 {
	order: 8
}
.order-xl-9 {
	order: 9
}
.order-xl-10 {
	order: 10
}
.order-xl-11 {
	order: 11
}
.order-xl-12 {
	order: 12
}
.offset-xl-0 {
	margin-left: 0
}
.offset-xl-1 {
	margin-left: 8.333333%
}
.offset-xl-2 {
	margin-left: 16.666667%
}
.offset-xl-3 {
	margin-left: 25%
}
.offset-xl-4 {
	margin-left: 33.333333%
}
.offset-xl-5 {
	margin-left: 41.666667%
}
.offset-xl-6 {
	margin-left: 50%
}
.offset-xl-7 {
	margin-left: 58.333333%
}
.offset-xl-8 {
	margin-left: 66.666667%
}
.offset-xl-9 {
	margin-left: 75%
}
.offset-xl-10 {
	margin-left: 83.333333%
}
.offset-xl-11 {
	margin-left: 91.666667%
}
}
.table {
	width: 100%;
	margin-bottom: 1rem;
	color: #363642
}
.table td, .table th {
	padding: .75rem;
	vertical-align: top;
	border-top: 1px solid #ecedf1
}
.table thead th {
	vertical-align: bottom;
	border-bottom: 2px solid #ecedf1
}
.table tbody+tbody {
	border-top: 2px solid #ecedf1
}
.table-sm td, .table-sm th {
	padding: .3rem
}
.table-bordered, .table-bordered td, .table-bordered th {
	border: 1px solid #ecedf1
}
.table-bordered thead td, .table-bordered thead th {
	border-bottom-width: 2px
}
.table-borderless tbody+tbody, .table-borderless td, .table-borderless th, .table-borderless thead th {
	border: 0
}
.table-striped tbody tr:nth-of-type(odd) {
	background-color: rgba(20,20,31,.05)
}
.table-hover tbody tr:hover {
	color: #363642;
	background-color: #f6f7f9
}
.table-primary, .table-primary>td, .table-primary>th {
	background-color: #c6d6e9
}
.table-primary tbody+tbody, .table-primary td, .table-primary th, .table-primary thead th {
	border-color: #95b3d6
}
.table-hover .table-primary:hover, .table-hover .table-primary:hover>td, .table-hover .table-primary:hover>th {
	background-color: #b4c9e2
}
.table-secondary, .table-secondary>td, .table-secondary>th {
	background-color: #fcfdfd
}
.table-secondary tbody+tbody, .table-secondary td, .table-secondary th, .table-secondary thead th {
	border-color: #fafbfc
}
.table-hover .table-secondary:hover, .table-hover .table-secondary:hover>td, .table-hover .table-secondary:hover>th {
	background-color: #edf3f3
}
.table-success, .table-success>td, .table-success>th {
	background-color: #b8e5de
}
.table-success tbody+tbody, .table-success td, .table-success th, .table-success thead th {
	border-color: #7acfc2
}
.table-hover .table-success:hover, .table-hover .table-success:hover>td, .table-hover .table-success:hover>th {
	background-color: #a5ded5
}
.table-info, .table-info>td, .table-info>th {
	background-color: #b8d9e7
}
.table-info tbody+tbody, .table-info td, .table-info th, .table-info thead th {
	border-color: #7bb9d2
}
.table-hover .table-info:hover, .table-hover .table-info:hover>td, .table-hover .table-info:hover>th {
	background-color: #a5cfe1
}
.table-warning, .table-warning>td, .table-warning>th {
	background-color: #fdeed6
}
.table-warning tbody+tbody, .table-warning td, .table-warning th, .table-warning thead th {
	border-color: #fbe0b3
}
.table-hover .table-warning:hover, .table-hover .table-warning:hover>td, .table-hover .table-warning:hover>th {
	background-color: #fce4be
}
.table-danger, .table-danger>td, .table-danger>th {
	background-color: #ebd6e5
}
.table-danger tbody+tbody, .table-danger td, .table-danger th, .table-danger thead th {
	border-color: #dab2cf
}
.table-hover .table-danger:hover, .table-hover .table-danger:hover>td, .table-hover .table-danger:hover>th {
	background-color: #e3c5da
}
.table-light, .table-light>td, .table-light>th {
	background-color: #fcfdfd
}
.table-light tbody+tbody, .table-light td, .table-light th, .table-light thead th {
	border-color: #fafbfc
}
.table-hover .table-light:hover, .table-hover .table-light:hover>td, .table-hover .table-light:hover>th {
	background-color: #edf3f3
}
.table-dark, .table-dark>td, .table-dark>th {
	background-color: #c1c1c5
}
.table-dark tbody+tbody, .table-dark td, .table-dark th, .table-dark thead th {
	border-color: #8c8c93
}
.table-hover .table-dark:hover, .table-hover .table-dark:hover>td, .table-hover .table-dark:hover>th {
	background-color: #b4b4b9
}
.table-active, .table-active>td, .table-active>th {
	background-color: <?= $themeColor; ?>
}
.table-hover .table-active:hover, .table-hover .table-active:hover>td, .table-hover .table-active:hover>th {
	background-color: #2e609c
}
.table .thead-dark th {
	color: #fff;
	background-color: #222230;
	border-color: #323246
}
.table .thead-light th {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #ecedf1
}
.table-dark {
	color: #fff;
	background-color: #222230
}
.table-dark td, .table-dark th, .table-dark thead th {
	border-color: #323246
}
.table-dark.table-bordered {
	border: 0
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
	background-color: hsla(0,0%,100%,.05)
}
.table-dark.table-hover tbody tr:hover {
	color: #fff;
	background-color: hsla(0,0%,100%,.075)
}

@media (max-width:575.98px) {
.table-responsive-sm {
	display: block;
	width: 100%;
	overflow-x: auto;
	-webkit-overflow-scrolling: touch
}
.table-responsive-sm>.table-bordered {
	border: 0
}
}

@media (max-width:767.98px) {
.table-responsive-md {
	display: block;
	width: 100%;
	overflow-x: auto;
	-webkit-overflow-scrolling: touch
}
.table-responsive-md>.table-bordered {
	border: 0
}
}

@media (max-width:991.98px) {
.table-responsive-lg {
	display: block;
	width: 100%;
	overflow-x: auto;
	-webkit-overflow-scrolling: touch
}
.table-responsive-lg>.table-bordered {
	border: 0
}
}

@media (max-width:1199.98px) {
.table-responsive-xl {
	display: block;
	width: 100%;
	overflow-x: auto;
	-webkit-overflow-scrolling: touch
}
.table-responsive-xl>.table-bordered {
	border: 0
}
}
.table-responsive {
	display: block;
	width: 100%;
	overflow-x: auto;
	-webkit-overflow-scrolling: touch
}
.table-responsive>.table-bordered {
	border: 0
}
.form-control {
	display: block;
	width: 100%;
	height: calc(1.5em + .75rem + 2px);
	padding: .375rem .75rem;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	color: #363642;
	background-color: #fff;
	background-clip: padding-box;
	border: 1px solid #c6c9d5;
	border-radius: .25rem;
	transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.form-control {
	transition: none
}
}
.form-control::-ms-expand {
background-color:transparent;
border:0
}
.form-control:-moz-focusring {
color:transparent;
text-shadow:0 0 0 #363642
}
.form-control:focus {
	color: #363642;
	background-color: #fff;
	border-color: <?= $themeColor; ?>;
	outline: 0;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.form-control::-webkit-input-placeholder {
color:#888c9b;
opacity:1
}
.form-control::-moz-placeholder {
color:#888c9b;
opacity:1
}
.form-control:-ms-input-placeholder {
color:#888c9b;
opacity:1
}
.form-control::-ms-input-placeholder {
color:#888c9b;
opacity:1
}
.form-control::placeholder {
color:#888c9b;
opacity:1
}
.form-control:disabled, .form-control[readonly] {
	background-color: #f6f7f9;
	opacity: 1
}
input[type=date].form-control, input[type=datetime-local].form-control, input[type=month].form-control, input[type=time].form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none
}
select.form-control:focus::-ms-value {
color:#363642;
background-color:#fff
}
.form-control-file, .form-control-range {
	display: block;
	width: 100%
}
.col-form-label {
	padding-top: calc(.375rem + 1px);
	padding-bottom: calc(.375rem + 1px);
	margin-bottom: 0;
	font-size: inherit;
	line-height: 1.5
}
.col-form-label-lg {
	padding-top: calc(.5rem + 1px);
	padding-bottom: calc(.5rem + 1px);
	font-size: 1rem;
	line-height: 1.75
}
.col-form-label-sm {
	padding-top: calc(.25rem + 1px);
	padding-bottom: calc(.25rem + 1px);
	font-size: .875rem;
	line-height: 1.5
}
.form-control-plaintext {
	display: block;
	width: 100%;
	padding: .375rem 0;
	margin-bottom: 0;
	font-size: 1rem;
	line-height: 1.5;
	color: #363642;
	background-color: transparent;
	border: solid transparent;
	border-width: 1px 0
}
.form-control-plaintext.form-control-lg, .form-control-plaintext.form-control-sm {
	padding-right: 0;
	padding-left: 0
}
.form-control-sm {
	height: calc(1.5em + .5rem + 2px);
	padding: .25rem .5rem;
	font-size: .875rem;
	line-height: 1.5;
	border-radius: .2rem
}
.form-control-lg {
	height: calc(1.75em + 1rem + 2px);
	padding: .5rem 1rem;
	font-size: 1rem;
	line-height: 1.75;
	border-radius: .3rem
}
select.form-control[multiple], select.form-control[size], textarea.form-control {
	height: auto
}
.form-group {
	margin-bottom: 1rem
}
.form-text {
	display: block;
	margin-top: .25rem
}
.form-row {
	display: flex;
	flex-wrap: wrap;
	margin-right: -5px;
	margin-left: -5px
}
.form-row>.col, .form-row>[class*=col-] {
	padding-right: 5px;
	padding-left: 5px
}
.form-check {
	position: relative;
	display: block;
	padding-left: 1.25rem
}
.form-check-input {
	position: absolute;
	margin-top: .3rem;
	margin-left: -1.25rem
}
.form-check-input:disabled~.form-check-label, .form-check-input[disabled]~.form-check-label {
	color: #888c9b
}
.form-check-label {
	margin-bottom: 0
}
.form-check-inline {
	display: inline-flex;
	align-items: center;
	padding-left: 0;
	margin-right: .75rem
}
.form-check-inline .form-check-input {
	position: static;
	margin-top: 0;
	margin-right: .3125rem;
	margin-left: 0
}
.valid-feedback {
	display: none;
	width: 100%;
	margin-top: .25rem;
	font-size: 80%;
	color: #097b0a
}
.valid-tooltip {
	position: absolute;
	top: 100%;
	z-index: 5;
	display: none;
	max-width: 100%;
	padding: .25rem .5rem;
	margin-top: .1rem;
	font-size: .875rem;
	line-height: 1.5;
	color: #fff;
	background-color: rgba(0,162,138,.98);
	border-radius: .25rem
}
.is-valid~.valid-feedback, .is-valid~.valid-tooltip, .was-validated :valid~.valid-feedback, .was-validated :valid~.valid-tooltip {
display:block
}
.form-control.is-valid, .was-validated .form-control:valid {
border-color:#097b0a;
padding-right:calc(1.5em + .75rem);
background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%2300A28A' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
background-repeat:no-repeat;
background-position:right calc(.375em + .1875rem) center;
background-size:calc(.75em + .375rem) calc(.75em + .375rem)
}
.form-control.is-valid:focus, .was-validated .form-control:valid:focus {
border-color:#097b0a;
box-shadow:0 0 0 1px rgba(0,162,138,.25)
}
.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
padding-right:calc(1.5em + .75rem);
background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)
}
.custom-select.is-valid, .was-validated .custom-select:valid {
border-color:#097b0a;
padding-right:calc(.75em + 2.3125rem);
background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='14' height='14' fill='%23888c9b' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19L403 749q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px, url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%2300A28A' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E") linear-gradient(180deg, #fff, #f6f7f9) no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)
}
.custom-select.is-valid:focus, .was-validated .custom-select:valid:focus {
border-color:#097b0a;
box-shadow:0 0 0 1px rgba(0,162,138,.25)
}
.form-check-input.is-valid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label {
color:#097b0a
}
.form-check-input.is-valid~.valid-feedback, .form-check-input.is-valid~.valid-tooltip, .was-validated .form-check-input:valid~.valid-feedback, .was-validated .form-check-input:valid~.valid-tooltip {
display:block
}
.custom-control-input.is-valid~.custom-control-label, .was-validated .custom-control-input:valid~.custom-control-label {
color:#097b0a
}
.custom-control-input.is-valid:checked~.custom-control-label:before, .was-validated .custom-control-input:valid:checked~.custom-control-label:before {
border-color:#00d5b5;
background-color:#00d5b5
}
.custom-control-input.is-valid:focus~.custom-control-label:before, .was-validated .custom-control-input:valid:focus~.custom-control-label:before {
box-shadow:0 0 0 1px rgba(0,162,138,.25)
}
.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label:before, .custom-file-input.is-valid~.custom-file-label, .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label:before, .was-validated .custom-file-input:valid~.custom-file-label {
border-color:#097b0a
}
.custom-file-input.is-valid:focus~.custom-file-label, .was-validated .custom-file-input:valid:focus~.custom-file-label {
box-shadow:0 0 0 1px rgba(0,162,138,.25)
}
.invalid-feedback {
	display: none;
	width: 100%;
	margin-top: .25rem;
	font-size: 80%;
	color: #ff0538
}
.invalid-tooltip {
	position: absolute;
	top: 100%;
	z-index: 5;
	display: none;
	max-width: 100%;
	padding: .25rem .5rem;
	margin-top: .1rem;
	font-size: .875rem;
	line-height: 1.5;
	color: #fff;
	background-color: rgba(183,107,163,.98);
	border-radius: .25rem
}
.is-invalid~.invalid-feedback, .is-invalid~.invalid-tooltip, .was-validated :invalid~.invalid-feedback, .was-validated :invalid~.invalid-tooltip {
display:block
}
.form-control.is-invalid, .was-validated .form-control:invalid {
border-color:#ff0538;
padding-right:calc(1.5em + .75rem);
background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23B76BA3'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23B76BA3' stroke='none'/%3E%3C/svg%3E");
background-repeat:no-repeat;
background-position:right calc(.375em + .1875rem) center;
background-size:calc(.75em + .375rem) calc(.75em + .375rem)
}
.form-control.is-invalid:focus, .was-validated .form-control:invalid:focus {
border-color:#ff0538;
box-shadow:0 0 0 1px rgba(183,107,163,.25)
}
.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
padding-right:calc(1.5em + .75rem);
background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)
}
.custom-select.is-invalid, .was-validated .custom-select:invalid {
border-color:#ff0538;
padding-right:calc(.75em + 2.3125rem);
background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='14' height='14' fill='%23888c9b' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19L403 749q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px, url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23B76BA3'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23B76BA3' stroke='none'/%3E%3C/svg%3E") linear-gradient(180deg, #fff, #f6f7f9) no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)
}
.custom-select.is-invalid:focus, .was-validated .custom-select:invalid:focus {
border-color:#ff0538;
box-shadow:0 0 0 1px rgba(183,107,163,.25)
}
.form-check-input.is-invalid~.form-check-label, .was-validated .form-check-input:invalid~.form-check-label {
color:#ff0538
}
.form-check-input.is-invalid~.invalid-feedback, .form-check-input.is-invalid~.invalid-tooltip, .was-validated .form-check-input:invalid~.invalid-feedback, .was-validated .form-check-input:invalid~.invalid-tooltip {
display:block
}
.custom-control-input.is-invalid~.custom-control-label, .was-validated .custom-control-input:invalid~.custom-control-label {
color:#ff0538
}
.custom-control-input.is-invalid:checked~.custom-control-label:before, .was-validated .custom-control-input:invalid:checked~.custom-control-label:before {
border-color:#c88db8;
background-color:#c88db8
}
.custom-control-input.is-invalid:focus~.custom-control-label:before, .was-validated .custom-control-input:invalid:focus~.custom-control-label:before {
box-shadow:0 0 0 1px rgba(183,107,163,.25)
}
.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label:before, .custom-file-input.is-invalid~.custom-file-label, .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label:before, .was-validated .custom-file-input:invalid~.custom-file-label {
border-color:#ff0538
}
.custom-file-input.is-invalid:focus~.custom-file-label, .was-validated .custom-file-input:invalid:focus~.custom-file-label {
box-shadow:0 0 0 1px rgba(183,107,163,.25)
}
.form-inline {
	display: flex;
	flex-flow: row wrap;
	align-items: center
}
.form-inline .form-check {
	width: 100%
}

@media (min-width:576px) {
.form-inline label {
	justify-content: center
}
.form-inline .form-group, .form-inline label {
	display: flex;
	align-items: center;
	margin-bottom: 0
}
.form-inline .form-group {
	flex: 0 0 auto;
	flex-flow: row wrap
}
.form-inline .form-control {
	display: inline-block;
	width: auto;
	vertical-align: middle
}
.form-inline .form-control-plaintext {
	display: inline-block
}
.form-inline .custom-select, .form-inline .input-group {
	width: auto
}
.form-inline .form-check {
	display: flex;
	align-items: center;
	justify-content: center;
	width: auto;
	padding-left: 0
}
.form-inline .form-check-input {
	position: relative;
	flex-shrink: 0;
	margin-top: 0;
	margin-right: .25rem;
	margin-left: 0
}
.form-inline .custom-control {
	align-items: center;
	justify-content: center
}
.form-inline .custom-control-label {
	margin-bottom: 0
}
}
.btn {
	display: inline-block;
	font-weight: 400;
	color: #363642;
	text-align: center;
	vertical-align: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	background-color: transparent;
	border: 1px solid transparent;
	padding: .375rem .75rem;
	font-size: 1rem;
	line-height: 1.5;
	border-radius: .25rem;
	transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.btn {
	transition: none
}
}
.btn:hover {
	color: #363642;
	text-decoration: none
}
.btn.focus, .btn:focus {
	outline: 0;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.btn.disabled, .btn:disabled {
	opacity: .65
}
.btn:not(:disabled):not(.disabled) {
	cursor: pointer
}
a.btn.disabled, fieldset:disabled a.btn {
	pointer-events: none
}
.btn-primary {
	color: #fff;
	background-color: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.btn-primary.focus, .btn-primary:focus, .btn-primary:hover {
	color: #fff;
	background-color: #2b5a92;
	border-color: #285489
}
.btn-primary.focus, .btn-primary:focus {
	box-shadow: 0 0 0 1px rgba(82,130,188,.5)
}
.btn-primary.disabled, .btn-primary:disabled {
	color: #fff;
	background-color: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
	color: #fff;
	background-color: #285489;
	border-color: #254e7f
}
.btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-primary.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(82,130,188,.5)
}
.btn-secondary {
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-secondary:hover {
	color: #363642;
	background-color: #dfe3ea
}
.btn-secondary.focus, .btn-secondary:focus {
	color: #363642;
	background-color: #dfe3ea;
	border-color: #d7dce5;
	box-shadow: 0 0 0 1px rgba(217,218,222,.5)
}
.btn-secondary.disabled, .btn-secondary:disabled {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
	color: #363642;
	background-color: #d7dce5;
	border-color: #d0d5e0
}
.btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus, .show>.btn-secondary.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(217,218,222,.5)
}
.btn-success {
	color: #fff;
	background-color: #097b0a;
	border-color: #097b0a
}
.btn-success.focus, .btn-success:focus, .btn-success:hover {
	color: #fff;
	background-color: #007c69;
	border-color: #006f5f
}
.btn-success.focus, .btn-success:focus {
	box-shadow: 0 0 0 1px rgba(38,176,156,.5)
}
.btn-success.disabled, .btn-success:disabled {
	color: #fff;
	background-color: #097b0a;
	border-color: #097b0a
}
.btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show>.btn-success.dropdown-toggle {
	color: #fff;
	background-color: #006f5f;
	border-color: #006254
}
.btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus, .show>.btn-success.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(38,176,156,.5)
}
.btn-info {
	color: #fff;
	background-color: #0179a8;
	border-color: #0179a8
}
.btn-info.focus, .btn-info:focus, .btn-info:hover {
	color: #fff;
	background-color: #015e82;
	border-color: #015475
}
.btn-info.focus, .btn-info:focus {
	box-shadow: 0 0 0 1px rgba(39,141,181,.5)
}
.btn-info.disabled, .btn-info:disabled {
	color: #fff;
	background-color: #0179a8;
	border-color: #0179a8
}
.btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show>.btn-info.dropdown-toggle {
	color: #fff;
	background-color: #015475;
	border-color: #014b69
}
.btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:not(:disabled):not(.disabled):active:focus, .show>.btn-info.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(39,141,181,.5)
}
.btn-warning {
	color: #363642;
	background-color: #f7c46c;
	border-color: #f7c46c
}
.btn-warning.focus, .btn-warning:focus, .btn-warning:hover {
	color: #363642;
	background-color: #f5b548;
	border-color: #f4b13c
}
.btn-warning.focus, .btn-warning:focus {
	box-shadow: 0 0 0 1px rgba(218,175,102,.5)
}
.btn-warning.disabled, .btn-warning:disabled {
	color: #363642;
	background-color: #f7c46c;
	border-color: #f7c46c
}
.btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active, .show>.btn-warning.dropdown-toggle {
	color: #363642;
	background-color: #f4b13c;
	border-color: #f4ac30
}
.btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus, .show>.btn-warning.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(218,175,102,.5)
}
.btn-danger {
	color: #fff;
	background-color: #ff0538;
	border-color: #ff0538
}
.btn-danger.focus, .btn-danger:focus, .btn-danger:hover {
	color: #fff;
	background-color: #a95292;
	border-color: #a14e8b
}
.btn-danger.focus, .btn-danger:focus {
	box-shadow: 0 0 0 1px rgba(194,129,177,.5)
}
.btn-danger.disabled, .btn-danger:disabled {
	color: #fff;
	background-color: #ff0538;
	border-color: #ff0538
}
.btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active, .show>.btn-danger.dropdown-toggle {
	color: #fff;
	background-color: #a14e8b;
	border-color: #984a84
}
.btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus, .show>.btn-danger.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(194,129,177,.5)
}
.btn-light {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-light.focus, .btn-light:focus, .btn-light:hover {
	background-color: #dfe3ea;
	border-color: #d7dce5
}
.btn-light.focus, .btn-light:focus {
	box-shadow: 0 0 0 1px rgba(217,218,222,.5)
}
.btn-light.disabled, .btn-light:disabled {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show>.btn-light.dropdown-toggle {
	color: #363642;
	background-color: #d7dce5;
	border-color: #d0d5e0
}
.btn-light:not(:disabled):not(.disabled).active:focus, .btn-light:not(:disabled):not(.disabled):active:focus, .show>.btn-light.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(217,218,222,.5)
}
.btn-dark {
	color: #fff;
	background-color: #222230;
	border-color: #222230
}
.btn-dark.focus, .btn-dark:focus, .btn-dark:hover {
	color: #fff;
	background-color: #12121a;
	border-color: #0d0d12
}
.btn-dark.focus, .btn-dark:focus {
	box-shadow: 0 0 0 1px rgba(67,67,79,.5)
}
.btn-dark.disabled, .btn-dark:disabled {
	color: #fff;
	background-color: #222230;
	border-color: #222230
}
.btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show>.btn-dark.dropdown-toggle {
	color: #fff;
	background-color: #0d0d12;
	border-color: #08080b
}
.btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus, .show>.btn-dark.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(67,67,79,.5)
}
.btn-outline-primary {
	color: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.btn-outline-primary:hover {
	color: #fff;
	background-color: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.btn-outline-primary.focus, .btn-outline-primary:focus {
	box-shadow: 0 0 0 1px rgba(52,108,176,.5)
}
.btn-outline-primary.disabled, .btn-outline-primary:disabled {
	color: <?= $themeColor; ?>;
	background-color: transparent
}
.btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active, .show>.btn-outline-primary.dropdown-toggle {
	color: #fff;
	background-color: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-primary.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(52,108,176,.5)
}
.btn-outline-secondary {
	color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-outline-secondary:hover {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-outline-secondary.focus, .btn-outline-secondary:focus {
	box-shadow: 0 0 0 1px rgba(246,247,249,.5)
}
.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
	color: #f6f7f9;
	background-color: transparent
}
.btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active, .show>.btn-outline-secondary.dropdown-toggle {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-secondary.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(246,247,249,.5)
}
.btn-outline-success {
	color: #097b0a;
	border-color: #097b0a
}
.btn-outline-success:hover {
	color: #fff;
	background-color: #097b0a;
	border-color: #097b0a
}
.btn-outline-success.focus, .btn-outline-success:focus {
	box-shadow: 0 0 0 1px rgba(0,162,138,.5)
}
.btn-outline-success.disabled, .btn-outline-success:disabled {
	color: #097b0a;
	background-color: transparent
}
.btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active, .show>.btn-outline-success.dropdown-toggle {
	color: #fff;
	background-color: #097b0a;
	border-color: #097b0a
}
.btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-success.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(0,162,138,.5)
}
.btn-outline-info {
	color: #0179a8;
	border-color: #0179a8
}
.btn-outline-info:hover {
	color: #fff;
	background-color: #0179a8;
	border-color: #0179a8
}
.btn-outline-info.focus, .btn-outline-info:focus {
	box-shadow: 0 0 0 1px rgba(1,121,168,.5)
}
.btn-outline-info.disabled, .btn-outline-info:disabled {
	color: #0179a8;
	background-color: transparent
}
.btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active, .show>.btn-outline-info.dropdown-toggle {
	color: #fff;
	background-color: #0179a8;
	border-color: #0179a8
}
.btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-info.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(1,121,168,.5)
}
.btn-outline-warning {
	color: #f7c46c;
	border-color: #f7c46c
}
.btn-outline-warning:hover {
	color: #363642;
	background-color: #f7c46c;
	border-color: #f7c46c
}
.btn-outline-warning.focus, .btn-outline-warning:focus {
	box-shadow: 0 0 0 1px rgba(247,196,108,.5)
}
.btn-outline-warning.disabled, .btn-outline-warning:disabled {
	color: #f7c46c;
	background-color: transparent
}
.btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active, .show>.btn-outline-warning.dropdown-toggle {
	color: #363642;
	background-color: #f7c46c;
	border-color: #f7c46c
}
.btn-outline-warning:not(:disabled):not(.disabled).active:focus, .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-warning.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(247,196,108,.5)
}
.btn-outline-danger {
	color: #ff0538;
	border-color: #ff0538
}
.btn-outline-danger:hover {
	color: #fff;
	background-color: #ff0538;
	border-color: #ff0538
}
.btn-outline-danger.focus, .btn-outline-danger:focus {
	box-shadow: 0 0 0 1px rgba(183,107,163,.5)
}
.btn-outline-danger.disabled, .btn-outline-danger:disabled {
	color: #ff0538;
	background-color: transparent
}
.btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active, .show>.btn-outline-danger.dropdown-toggle {
	color: #fff;
	background-color: #ff0538;
	border-color: #ff0538
}
.btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-danger.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(183,107,163,.5)
}
.btn-outline-light {
	color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-outline-light:hover {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-outline-light.focus, .btn-outline-light:focus {
	box-shadow: 0 0 0 1px rgba(246,247,249,.5)
}
.btn-outline-light.disabled, .btn-outline-light:disabled {
	color: #f6f7f9;
	background-color: transparent
}
.btn-outline-light:not(:disabled):not(.disabled).active, .btn-outline-light:not(:disabled):not(.disabled):active, .show>.btn-outline-light.dropdown-toggle {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #f6f7f9
}
.btn-outline-light:not(:disabled):not(.disabled).active:focus, .btn-outline-light:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-light.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(246,247,249,.5)
}
.btn-outline-dark {
	color: #222230;
	border-color: #222230
}
.btn-outline-dark:hover {
	color: #fff;
	background-color: #222230;
	border-color: #222230
}
.btn-outline-dark.focus, .btn-outline-dark:focus {
	box-shadow: 0 0 0 1px rgba(34,34,48,.5)
}
.btn-outline-dark.disabled, .btn-outline-dark:disabled {
	color: #222230;
	background-color: transparent
}
.btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active, .show>.btn-outline-dark.dropdown-toggle {
	color: #fff;
	background-color: #222230;
	border-color: #222230
}
.btn-outline-dark:not(:disabled):not(.disabled).active:focus, .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-dark.dropdown-toggle:focus {
	box-shadow: 0 0 0 1px rgba(34,34,48,.5)
}
.btn-link {
	font-weight: 400;
	color: <?= $themeColor; ?>;
	text-decoration: none
}
.btn-link:hover {
	color: #234875
}
.btn-link.focus, .btn-link:focus, .btn-link:hover {
	text-decoration: underline
}
.btn-link.disabled, .btn-link:disabled {
	color: #888c9b;
	pointer-events: none
}
.btn-group-lg>.btn, .btn-lg {
	padding: .5rem 1rem;
	font-size: 1rem;
	line-height: 1.75;
	border-radius: .3rem
}
.btn-group-sm>.btn, .btn-sm {
	padding: .25rem .5rem;
	font-size: .875rem;
	line-height: 1.5;
	border-radius: .2rem
}
.btn-block {
	display: block;
	width: 100%
}
.btn-block+.btn-block {
	margin-top: .5rem
}
input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
	width: 100%
}
.fade {
	transition: opacity .15s linear
}

@media (prefers-reduced-motion:reduce) {
.fade {
	transition: none
}
}
.fade:not(.show) {
	opacity: 0
}
.collapse:not(.show) {
	display: none
}
.collapsing {
	position: relative;
	height: 0;
	overflow: hidden;
	transition: height .35s ease
}

@media (prefers-reduced-motion:reduce) {
.collapsing {
	transition: none
}
}
.dropdown, .dropleft, .dropright, .dropup {
	position: relative
}
.dropdown-toggle {
	white-space: nowrap
}
.dropdown-toggle:after {
	display: inline-block;
	margin-left: .255em;
	vertical-align: .255em;
	content: "";
	border-top: .3em solid;
	border-right: .3em solid transparent;
	border-bottom: 0;
	border-left: .3em solid transparent
}
.dropdown-toggle:empty:after {
	margin-left: 0
}
.dropdown-menu {
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 10rem;
	padding: .5rem 0;
	margin: .125rem 0 0;
	font-size: 1rem;
	color: #363642;
	text-align: left;
	list-style: none;
	background-color: hsla(0,0%,100%,.98);
	background-clip: padding-box;
	border: 1px solid rgba(20,20,31,.15);
	border-radius: .25rem
}
.dropdown-menu-left {
	right: auto;
	left: 0
}
.dropdown-menu-right {
	right: 0;
	left: auto
}

@media (min-width:576px) {
.dropdown-menu-sm-left {
	right: auto;
	left: 0
}
.dropdown-menu-sm-right {
	right: 0;
	left: auto
}
}

@media (min-width:768px) {
.dropdown-menu-md-left {
	right: auto;
	left: 0
}
.dropdown-menu-md-right {
	right: 0;
	left: auto
}
}

@media (min-width:992px) {
.dropdown-menu-lg-left {
	right: auto;
	left: 0
}
.dropdown-menu-lg-right {
	right: 0;
	left: auto
}
}

@media (min-width:1200px) {
.dropdown-menu-xl-left {
	right: auto;
	left: 0
}
.dropdown-menu-xl-right {
	right: 0;
	left: auto
}
}
.dropup .dropdown-menu {
	top: auto;
	bottom: 100%;
	margin-top: 0;
	margin-bottom: .125rem
}
.dropup .dropdown-toggle:after {
	display: inline-block;
	margin-left: .255em;
	vertical-align: .255em;
	content: "";
	border-top: 0;
	border-right: .3em solid transparent;
	border-bottom: .3em solid;
	border-left: .3em solid transparent
}
.dropup .dropdown-toggle:empty:after {
	margin-left: 0
}
.dropright .dropdown-menu {
	top: 0;
	right: auto;
	left: 100%;
	margin-top: 0;
	margin-left: .125rem
}
.dropright .dropdown-toggle:after {
	display: inline-block;
	margin-left: .255em;
	vertical-align: .255em;
	content: "";
	border-top: .3em solid transparent;
	border-right: 0;
	border-bottom: .3em solid transparent;
	border-left: .3em solid
}
.dropright .dropdown-toggle:empty:after {
	margin-left: 0
}
.dropright .dropdown-toggle:after {
	vertical-align: 0
}
.dropleft .dropdown-menu {
	top: 0;
	right: 100%;
	left: auto;
	margin-top: 0;
	margin-right: .125rem
}
.dropleft .dropdown-toggle:after {
	display: inline-block;
	margin-left: .255em;
	vertical-align: .255em;
	content: "";
	display: none
}
.dropleft .dropdown-toggle:before {
	display: inline-block;
	margin-right: .255em;
	vertical-align: .255em;
	content: "";
	border-top: .3em solid transparent;
	border-right: .3em solid;
	border-bottom: .3em solid transparent
}
.dropleft .dropdown-toggle:empty:after {
	margin-left: 0
}
.dropleft .dropdown-toggle:before {
	vertical-align: 0
}
.dropdown-menu[x-placement^=bottom], .dropdown-menu[x-placement^=left], .dropdown-menu[x-placement^=right], .dropdown-menu[x-placement^=top] {
	right: auto;
	bottom: auto
}
.dropdown-divider {
	height: 0;
	margin: .5rem 0;
	overflow: hidden;
	border-top: 1px solid #e6e8ed
}
.dropdown-item {
	display: block;
	width: 100%;
	padding: .5rem 1rem;
	clear: both;
	font-weight: 400;
	color: #191927;
	text-align: inherit;
	white-space: nowrap;
	background-color: transparent;
	border: 0
}
.dropdown-item.active, .dropdown-item:active, .dropdown-item:focus, .dropdown-item:hover {
	color: #fff;
	text-decoration: none;
	background-color: <?= $themeColor; ?>
}
.dropdown-item.disabled, .dropdown-item:disabled {
	color: #888c9b;
	pointer-events: none;
	background-color: transparent
}
.dropdown-menu.show {
	display: block
}
.dropdown-header {
	display: block;
	padding: .5rem 1rem;
	margin-bottom: 0;
	font-size: .875rem;
	color: #888c9b;
	white-space: nowrap
}
.dropdown-item-text {
	display: block;
	padding: .5rem 1rem;
	color: #191927
}
.btn-group, .btn-group-vertical {
	position: relative;
	display: inline-flex;
	vertical-align: middle
}
.btn-group-vertical>.btn, .btn-group>.btn {
	position: relative;
	flex: 1 1 auto
}
.btn-group-vertical>.btn.active, .btn-group-vertical>.btn:active, .btn-group-vertical>.btn:focus, .btn-group-vertical>.btn:hover, .btn-group>.btn.active, .btn-group>.btn:active, .btn-group>.btn:focus, .btn-group>.btn:hover {
	z-index: 1
}
.btn-toolbar {
	display: flex;
	flex-wrap: wrap;
	justify-content: flex-start
}
.btn-toolbar .input-group {
	width: auto
}
.btn-group>.btn-group:not(:first-child), .btn-group>.btn:not(:first-child) {
	margin-left: -1px
}
.btn-group>.btn-group:not(:last-child)>.btn, .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0
}
.btn-group>.btn-group:not(:first-child)>.btn, .btn-group>.btn:not(:first-child) {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0
}
.dropdown-toggle-split {
	padding-right: .5625rem;
	padding-left: .5625rem
}
.dropdown-toggle-split:after, .dropright .dropdown-toggle-split:after, .dropup .dropdown-toggle-split:after {
	margin-left: 0
}
.dropleft .dropdown-toggle-split:before {
	margin-right: 0
}
.btn-group-sm>.btn+.dropdown-toggle-split, .btn-sm+.dropdown-toggle-split {
	padding-right: .375rem;
	padding-left: .375rem
}
.btn-group-lg>.btn+.dropdown-toggle-split, .btn-lg+.dropdown-toggle-split {
	padding-right: .75rem;
	padding-left: .75rem
}
.btn-group-vertical {
	flex-direction: column;
	align-items: flex-start;
	justify-content: center
}
.btn-group-vertical>.btn, .btn-group-vertical>.btn-group {
	width: 100%
}
.btn-group-vertical>.btn-group:not(:first-child), .btn-group-vertical>.btn:not(:first-child) {
	margin-top: -1px
}
.btn-group-vertical>.btn-group:not(:last-child)>.btn, .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0
}
.btn-group-vertical>.btn-group:not(:first-child)>.btn, .btn-group-vertical>.btn:not(:first-child) {
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.btn-group-toggle>.btn, .btn-group-toggle>.btn-group>.btn {
	margin-bottom: 0
}
.btn-group-toggle>.btn-group>.btn input[type=checkbox], .btn-group-toggle>.btn-group>.btn input[type=radio], .btn-group-toggle>.btn input[type=checkbox], .btn-group-toggle>.btn input[type=radio] {
	position: absolute;
	clip: rect(0,0,0,0);
	pointer-events: none
}
.input-group {
	position: relative;
	display: flex;
	flex-wrap: wrap;
	align-items: stretch;
	width: 100%
}
.input-group>.custom-file, .input-group>.custom-select, .input-group>.form-control, .input-group>.form-control-plaintext {
	position: relative;
	flex: 1 1 auto;
	width: 1%;
	min-width: 0;
	margin-bottom: 0
}
.input-group>.custom-file+.custom-file, .input-group>.custom-file+.custom-select, .input-group>.custom-file+.form-control, .input-group>.custom-select+.custom-file, .input-group>.custom-select+.custom-select, .input-group>.custom-select+.form-control, .input-group>.form-control+.custom-file, .input-group>.form-control+.custom-select, .input-group>.form-control+.form-control, .input-group>.form-control-plaintext+.custom-file, .input-group>.form-control-plaintext+.custom-select, .input-group>.form-control-plaintext+.form-control {
	margin-left: -1px
}
.input-group>.custom-file .custom-file-input:focus~.custom-file-label, .input-group>.custom-select:focus, .input-group>.form-control:focus {
	z-index: 3
}
.input-group>.custom-file .custom-file-input:focus {
	z-index: 4
}
.input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0
}
.input-group>.custom-select:not(:first-child), .input-group>.form-control:not(:first-child) {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0
}
.input-group>.custom-file {
	display: flex;
	align-items: center
}
.input-group>.custom-file:not(:last-child) .custom-file-label, .input-group>.custom-file:not(:last-child) .custom-file-label:after {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0
}
.input-group>.custom-file:not(:first-child) .custom-file-label {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0
}
.input-group-append, .input-group-prepend {
	display: flex
}
.input-group-append .btn, .input-group-prepend .btn {
	position: relative;
	z-index: 2
}
.input-group-append .btn+.btn, .input-group-append .btn+.input-group-text, .input-group-append .input-group-text+.btn, .input-group-append .input-group-text+.input-group-text, .input-group-prepend .btn+.btn, .input-group-prepend .btn+.input-group-text, .input-group-prepend .input-group-text+.btn, .input-group-prepend .input-group-text+.input-group-text {
	margin-left: -1px
}
.input-group-prepend {
	margin-right: -1px
}
.input-group-append {
	margin-left: -1px
}
.input-group-text {
	display: flex;
	align-items: center;
	padding: .375rem .75rem;
	margin-bottom: 0;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	color: #363642;
	text-align: center;
	white-space: nowrap;
	background-color: #fff;
	border: 1px solid #c6c9d5;
	border-radius: .25rem
}
.input-group-text input[type=checkbox], .input-group-text input[type=radio] {
	margin-top: 0
}
.input-group-lg>.custom-select, .input-group-lg>.form-control:not(textarea) {
	height: calc(1.75em + 1rem + 2px)
}
.input-group-lg>.custom-select, .input-group-lg>.form-control, .input-group-lg>.input-group-append>.btn, .input-group-lg>.input-group-append>.input-group-text, .input-group-lg>.input-group-prepend>.btn, .input-group-lg>.input-group-prepend>.input-group-text {
	padding: .5rem 1rem;
	font-size: 1rem;
	line-height: 1.75;
	border-radius: .3rem
}
.input-group-sm>.custom-select, .input-group-sm>.form-control:not(textarea) {
	height: calc(1.5em + .5rem + 2px)
}
.input-group-sm>.custom-select, .input-group-sm>.form-control, .input-group-sm>.input-group-append>.btn, .input-group-sm>.input-group-append>.input-group-text, .input-group-sm>.input-group-prepend>.btn, .input-group-sm>.input-group-prepend>.input-group-text {
	padding: .25rem .5rem;
	font-size: .875rem;
	line-height: 1.5;
	border-radius: .2rem
}
.input-group-lg>.custom-select, .input-group-sm>.custom-select {
	padding-right: 1.75rem
}
.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle), .input-group>.input-group-append:last-child>.input-group-text:not(:last-child), .input-group>.input-group-append:not(:last-child)>.btn, .input-group>.input-group-append:not(:last-child)>.input-group-text, .input-group>.input-group-prepend>.btn, .input-group>.input-group-prepend>.input-group-text {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0
}
.input-group>.input-group-append>.btn, .input-group>.input-group-append>.input-group-text, .input-group>.input-group-prepend:first-child>.btn:not(:first-child), .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child), .input-group>.input-group-prepend:not(:first-child)>.btn, .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0
}
.custom-control {
	position: relative;
	display: block;
	min-height: 1.5rem;
	padding-left: 1.5rem
}
.custom-control-inline {
	display: inline-flex;
	margin-right: 1rem
}
.custom-control-input {
	position: absolute;
	z-index: -1;
	width: 1rem;
	height: 1.25rem;
	opacity: 0
}
.custom-control-input:checked~.custom-control-label:before {
	color: #fff;
	background-color: <?= $themeColor; ?>
}
.custom-control-input:focus~.custom-control-label:before {
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.custom-control-input:focus:not(:checked)~.custom-control-label:before {
	border-color: <?= $themeColor; ?>
}
.custom-control-input:not(:disabled):active~.custom-control-label:before {
	color: #fff;
	background-color: #afc9e7;
	border-color: #afc9e7
}
.custom-control-input:disabled~.custom-control-label, .custom-control-input[disabled]~.custom-control-label {
	color: #888c9b
}
.custom-control-input:disabled~.custom-control-label:before, .custom-control-input[disabled]~.custom-control-label:before {
	background-color: #f6f7f9
}
.custom-control-label {
	position: relative;
	margin-bottom: 0;
	vertical-align: top
}
.custom-control-label:before {
	pointer-events: none;
	background-color: #fff;
	border: 1px solid #a6abbd
}
.custom-control-label:after, .custom-control-label:before {
	position: absolute;
	top: .25rem;
	left: -1.5rem;
	display: block;
	width: 1rem;
	height: 1rem;
	content: ""
}
.custom-control-label:after {
	background: no-repeat 50%/63% 63%
}
.custom-checkbox .custom-control-label:before {
	border-radius: .25rem
}
.custom-checkbox .custom-control-input:checked~.custom-control-label:after {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%230179A8' width='8' height='8'%3E%3Cpath d='M6.41 1l-.69.72L2.94 4.5l-.81-.78L1.41 3 0 4.41l.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 1z'/%3E%3C/svg%3E")
}
.custom-checkbox .custom-control-input:indeterminate~.custom-control-label:before {
	border-color: <?= $themeColor; ?>;
	background-color: <?= $themeColor; ?>
}
.custom-checkbox .custom-control-input:indeterminate~.custom-control-label:after {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%230179A8' width='8' height='8'%3E%3Cpath d='M0 3v2h8V3H0z'/%3E%3C/svg%3E")
}
.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label:before {
	background-color: rgba(52,108,176,.5)
}
.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label:before {
	background-color: rgba(52,108,176,.5)
}
.custom-radio .custom-control-label:before {
	border-radius: 50%
}
.custom-radio .custom-control-input:checked~.custom-control-label:after {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%230179A8' width='8' height='8'%3E%3Cpath d='M4 1C2.34 1 1 2.34 1 4s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z'/%3E%3C/svg%3E")
}
.custom-radio .custom-control-input:disabled:checked~.custom-control-label:before {
	background-color: rgba(52,108,176,.5)
}
.custom-switch {
	padding-left: 2.25rem
}
.custom-switch .custom-control-label:before {
	left: -2.25rem;
	width: 1.75rem;
	pointer-events: all;
	border-radius: .5rem
}
.custom-switch .custom-control-label:after {
	top: calc(.25rem + 2px);
	left: calc(-2.25rem + 2px);
	width: calc(1rem - 4px);
	height: calc(1rem - 4px);
	background-color: #a6abbd;
	border-radius: .5rem;
	transition: transform .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.custom-switch .custom-control-label:after {
	transition: none
}
}
.custom-switch .custom-control-input:checked~.custom-control-label:after {
	background-color: #fff;
	transform: translateX(.75rem)
}
.custom-switch .custom-control-input:disabled:checked~.custom-control-label:before {
	background-color: rgba(52,108,176,.5)
}
.custom-select {
	display: inline-block;
	width: 100%;
	height: calc(1.5em + .75rem + 2px);
	padding: .375rem 1.75rem .375rem .75rem;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	color: #363642;
	vertical-align: middle;
	background: linear-gradient(180deg, #fff, #f6f7f9) url("data:image/svg+xml;charset=utf-8,%3Csvg width='14' height='14' fill='%23888c9b' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19L403 749q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px;
	border: 1px solid #c6c9d5;
	border-radius: .25rem;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none
}
.custom-select:focus {
	border-color: <?= $themeColor; ?>;
	outline: 0;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.custom-select:focus::-ms-value {
color:#363642;
background-color:#fff
}
.custom-select[multiple], .custom-select[size]:not([size="1"]) {
	height: auto;
	padding-right: .75rem;
	background-image: none
}
.custom-select:disabled {
	color: #888c9b;
	background-color: #e6e8ed
}
.custom-select::-ms-expand {
display:none
}
.custom-select:-moz-focusring {
color:transparent;
text-shadow:0 0 0 #363642
}
.custom-select-sm {
	height: calc(1.5em + .5rem + 2px);
	padding-top: .25rem;
	padding-bottom: .25rem;
	padding-left: .5rem
}
.custom-select-lg {
	height: calc(1.75em + 1rem + 2px);
	padding-top: .5rem;
	padding-bottom: .5rem;
	padding-left: 1rem;
	font-size: 1rem
}
.custom-file {
	display: inline-block;
	margin-bottom: 0
}
.custom-file, .custom-file-input {
	position: relative;
	width: 100%;
	height: calc(1.5em + .75rem + 2px)
}
.custom-file-input {
	z-index: 2;
	margin: 0;
	opacity: 0
}
.custom-file-input:disabled~.custom-file-label, .custom-file-input[disabled]~.custom-file-label {
	background-color: #f6f7f9
}
.custom-file-input:lang(en)~.custom-file-label:after {
	content: "Browse"
}
.custom-file-input~.custom-file-label[data-browse]:after {
	content: attr(data-browse)
}
.custom-file-label {
	left: 0;
	z-index: 1;
	height: calc(1.5em + .75rem + 2px);
	font-weight: 400;
	border: 1px solid #c6c9d5;
	border-radius: .25rem
}
.custom-file-label, .custom-file-label:after {
	position: absolute;
	top: 0;
	right: 0;
	padding: .375rem .75rem;
	line-height: 1.5;
	color: #363642;
	background-color: #fff
}
.custom-file-label:after {
	bottom: 0;
	z-index: 3;
	display: block;
	height: calc(1.5em + .75rem);
	content: "Browse";
	border-left: inherit;
	border-radius: 0 .25rem .25rem 0
}
.custom-range {
	width: 100%;
	height: calc(1rem + 2px);
	padding: 0;
	background-color: transparent;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none
}
.custom-range:focus {
	outline: none
}
.custom-range:focus::-webkit-slider-thumb {
box-shadow:0 0 0 1px #f6f7f9, 0 0 0 1px <?= $themeColor; ?>
}
.custom-range:focus::-moz-range-thumb {
box-shadow:0 0 0 1px #f6f7f9, 0 0 0 1px <?= $themeColor; ?>
}
.custom-range:focus::-ms-thumb {
box-shadow:0 0 0 1px #f6f7f9, 0 0 0 1px <?= $themeColor; ?>
}
.custom-range::-moz-focus-outer {
border:0
}
.custom-range::-webkit-slider-thumb {
width:1rem;
height:1rem;
margin-top:-.25rem;
background-color:<?= $themeColor; ?>;
border:0;
border-radius:1rem;
-webkit-transition:background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
transition:background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
-webkit-appearance:none;
appearance:none
}

@media (prefers-reduced-motion:reduce) {
.custom-range::-webkit-slider-thumb {
-webkit-transition:none;
transition:none
}
}
.custom-range::-webkit-slider-thumb:active {
background-color:#afc9e7
}
.custom-range::-webkit-slider-runnable-track {
width:100%;
height:.5rem;
color:transparent;
cursor:pointer;
background-color:#d6d8e1;
border-color:transparent;
border-radius:1rem
}
.custom-range::-moz-range-thumb {
width:1rem;
height:1rem;
background-color:<?= $themeColor; ?>;
border:0;
border-radius:1rem;
-moz-transition:background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
transition:background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
-moz-appearance:none;
appearance:none
}

@media (prefers-reduced-motion:reduce) {
.custom-range::-moz-range-thumb {
-moz-transition:none;
transition:none
}
}
.custom-range::-moz-range-thumb:active {
background-color:#afc9e7
}
.custom-range::-moz-range-track {
width:100%;
height:.5rem;
color:transparent;
cursor:pointer;
background-color:#d6d8e1;
border-color:transparent;
border-radius:1rem
}
.custom-range::-ms-thumb {
width:1rem;
height:1rem;
margin-top:0;
margin-right:1px;
margin-left:1px;
background-color:<?= $themeColor; ?>;
border:0;
border-radius:1rem;
-ms-transition:background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
transition:background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
appearance:none
}

@media (prefers-reduced-motion:reduce) {
.custom-range::-ms-thumb {
-ms-transition:none;
transition:none
}
}
.custom-range::-ms-thumb:active {
background-color:#afc9e7
}
.custom-range::-ms-track {
width:100%;
height:.5rem;
color:transparent;
cursor:pointer;
background-color:transparent;
border-color:transparent;
border-width:.5rem
}
.custom-range::-ms-fill-lower, .custom-range::-ms-fill-upper {
background-color:#d6d8e1;
border-radius:1rem
}
.custom-range::-ms-fill-upper {
margin-right:15px
}
.custom-range:disabled::-webkit-slider-thumb {
background-color:#a6abbd
}
.custom-range:disabled::-webkit-slider-runnable-track {
cursor:default
}
.custom-range:disabled::-moz-range-thumb {
background-color:#a6abbd
}
.custom-range:disabled::-moz-range-track {
cursor:default
}
.custom-range:disabled::-ms-thumb {
background-color:#a6abbd
}
.custom-control-label:before, .custom-file-label, .custom-select {
	transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.custom-control-label:before, .custom-file-label, .custom-select {
	transition: none
}
}
.nav {
	display: flex;
	flex-wrap: wrap;
	padding-left: 0;
	margin-bottom: 0;
	list-style: none
}
.nav-link {
	display: block;
	padding: .375rem 1rem
}
.nav-link:focus, .nav-link:hover {
	text-decoration: none
}
.nav-link.disabled {
	color: #888c9b;
	pointer-events: none;
	cursor: default
}
.nav-tabs {
	border-bottom: 1px solid rgba(34,34,48,.1)
}
.nav-tabs .nav-item {
	margin-bottom: -1px
}
.nav-tabs .nav-link {
	border: 1px solid transparent;
	border-top-left-radius: .25rem;
	border-top-right-radius: .25rem
}
.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
	border-color: #e6e8ed #e6e8ed rgba(34,34,48,.1)
}
.nav-tabs .nav-link.disabled {
	color: #888c9b;
	background-color: transparent;
	border-color: transparent
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
	color: #222230;
	background-color: transparent;
	border-color: <?= $themeColor; ?>
}
.nav-tabs .dropdown-menu {
	margin-top: -1px;
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.nav-pills .nav-link {
	border-radius: .25rem
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
	color: #fff;
	background-color: <?= $themeColor; ?>
}
.nav-fill .nav-item {
	flex: 1 1 auto;
	text-align: center
}
.nav-justified .nav-item {
	flex-basis: 0;
	flex-grow: 1;
	text-align: center
}
.tab-content>.tab-pane {
	display: none
}
.tab-content>.active {
	display: block
}
.navbar {
	position: relative;
	padding: .5rem 1rem
}
.navbar, .navbar .container, .navbar .container-fluid, .navbar .container-lg, .navbar .container-md, .navbar .container-sm, .navbar .container-xl {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between
}
.navbar-brand {
	display: inline-block;
	padding-top: 0;
	padding-bottom: 0;
	margin-right: 1rem;
	font-size: 1.25rem;
	line-height: inherit;
	white-space: nowrap
}
.navbar-brand:focus, .navbar-brand:hover {
	text-decoration: none
}
.navbar-nav {
	display: flex;
	flex-direction: column;
	padding-left: 0;
	margin-bottom: 0;
	list-style: none
}
.navbar-nav .nav-link {
	padding-right: 0;
	padding-left: 0
}
.navbar-nav .dropdown-menu {
	position: static;
	float: none
}
.navbar-text {
	display: inline-block;
	padding-top: .375rem;
	padding-bottom: .375rem
}
.navbar-collapse {
	flex-basis: 100%;
	flex-grow: 1;
	align-items: center
}
.navbar-toggler {
	padding: .25rem .75rem;
	font-size: 1.25rem;
	line-height: 1;
	background-color: transparent;
	border: 1px solid transparent;
	border-radius: .25rem
}
.navbar-toggler:focus, .navbar-toggler:hover {
	text-decoration: none
}
.navbar-toggler-icon {
	display: inline-block;
	width: 1.5em;
	height: 1.5em;
	vertical-align: middle;
	content: "";
	background: no-repeat 50%;
	background-size: 100% 100%
}

@media (max-width:575.98px) {
.navbar-expand-sm>.container, .navbar-expand-sm>.container-fluid, .navbar-expand-sm>.container-lg, .navbar-expand-sm>.container-md, .navbar-expand-sm>.container-sm, .navbar-expand-sm>.container-xl {
	padding-right: 0;
	padding-left: 0
}
}

@media (min-width:576px) {
.navbar-expand-sm {
	flex-flow: row nowrap;
	justify-content: flex-start
}
.navbar-expand-sm .navbar-nav {
	flex-direction: row
}
.navbar-expand-sm .navbar-nav .dropdown-menu {
	position: absolute
}
.navbar-expand-sm .navbar-nav .nav-link {
	padding-right: .5rem;
	padding-left: .5rem
}
.navbar-expand-sm>.container, .navbar-expand-sm>.container-fluid, .navbar-expand-sm>.container-lg, .navbar-expand-sm>.container-md, .navbar-expand-sm>.container-sm, .navbar-expand-sm>.container-xl {
	flex-wrap: nowrap
}
.navbar-expand-sm .navbar-collapse {
	display: flex!important;
	flex-basis: auto
}
.navbar-expand-sm .navbar-toggler {
	display: none
}
}

@media (max-width:767.98px) {
.navbar-expand-md>.container, .navbar-expand-md>.container-fluid, .navbar-expand-md>.container-lg, .navbar-expand-md>.container-md, .navbar-expand-md>.container-sm, .navbar-expand-md>.container-xl {
	padding-right: 0;
	padding-left: 0
}
}

@media (min-width:768px) {
.navbar-expand-md {
	flex-flow: row nowrap;
	justify-content: flex-start
}
.navbar-expand-md .navbar-nav {
	flex-direction: row
}
.navbar-expand-md .navbar-nav .dropdown-menu {
	position: absolute
}
.navbar-expand-md .navbar-nav .nav-link {
	padding-right: .5rem;
	padding-left: .5rem
}
.navbar-expand-md>.container, .navbar-expand-md>.container-fluid, .navbar-expand-md>.container-lg, .navbar-expand-md>.container-md, .navbar-expand-md>.container-sm, .navbar-expand-md>.container-xl {
	flex-wrap: nowrap
}
.navbar-expand-md .navbar-collapse {
	display: flex!important;
	flex-basis: auto
}
.navbar-expand-md .navbar-toggler {
	display: none
}
}

@media (max-width:991.98px) {
.navbar-expand-lg>.container, .navbar-expand-lg>.container-fluid, .navbar-expand-lg>.container-lg, .navbar-expand-lg>.container-md, .navbar-expand-lg>.container-sm, .navbar-expand-lg>.container-xl {
	padding-right: 0;
	padding-left: 0
}
}

@media (min-width:992px) {
.navbar-expand-lg {
	flex-flow: row nowrap;
	justify-content: flex-start
}
.navbar-expand-lg .navbar-nav {
	flex-direction: row
}
.navbar-expand-lg .navbar-nav .dropdown-menu {
	position: absolute
}
.navbar-expand-lg .navbar-nav .nav-link {
	padding-right: .5rem;
	padding-left: .5rem
}
.navbar-expand-lg>.container, .navbar-expand-lg>.container-fluid, .navbar-expand-lg>.container-lg, .navbar-expand-lg>.container-md, .navbar-expand-lg>.container-sm, .navbar-expand-lg>.container-xl {
	flex-wrap: nowrap
}
.navbar-expand-lg .navbar-collapse {
	display: flex!important;
	flex-basis: auto
}
.navbar-expand-lg .navbar-toggler {
	display: none
}
}

@media (max-width:1199.98px) {
.navbar-expand-xl>.container, .navbar-expand-xl>.container-fluid, .navbar-expand-xl>.container-lg, .navbar-expand-xl>.container-md, .navbar-expand-xl>.container-sm, .navbar-expand-xl>.container-xl {
	padding-right: 0;
	padding-left: 0
}
}

@media (min-width:1200px) {
.navbar-expand-xl {
	flex-flow: row nowrap;
	justify-content: flex-start
}
.navbar-expand-xl .navbar-nav {
	flex-direction: row
}
.navbar-expand-xl .navbar-nav .dropdown-menu {
	position: absolute
}
.navbar-expand-xl .navbar-nav .nav-link {
	padding-right: .5rem;
	padding-left: .5rem
}
.navbar-expand-xl>.container, .navbar-expand-xl>.container-fluid, .navbar-expand-xl>.container-lg, .navbar-expand-xl>.container-md, .navbar-expand-xl>.container-sm, .navbar-expand-xl>.container-xl {
	flex-wrap: nowrap
}
.navbar-expand-xl .navbar-collapse {
	display: flex!important;
	flex-basis: auto
}
.navbar-expand-xl .navbar-toggler {
	display: none
}
}
.navbar-expand {
	flex-flow: row nowrap;
	justify-content: flex-start
}
.navbar-expand>.container, .navbar-expand>.container-fluid, .navbar-expand>.container-lg, .navbar-expand>.container-md, .navbar-expand>.container-sm, .navbar-expand>.container-xl {
	padding-right: 0;
	padding-left: 0
}
.navbar-expand .navbar-nav {
	flex-direction: row
}
.navbar-expand .navbar-nav .dropdown-menu {
	position: absolute
}
.navbar-expand .navbar-nav .nav-link {
	padding-right: .5rem;
	padding-left: .5rem
}
.navbar-expand>.container, .navbar-expand>.container-fluid, .navbar-expand>.container-lg, .navbar-expand>.container-md, .navbar-expand>.container-sm, .navbar-expand>.container-xl {
	flex-wrap: nowrap
}
.navbar-expand .navbar-collapse {
	display: flex!important;
	flex-basis: auto
}
.navbar-expand .navbar-toggler {
	display: none
}
.navbar-light .navbar-brand, .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
	color: #222230
}
.navbar-light .navbar-nav .nav-link {
	color: rgba(20,20,31,.4)
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #363642
}
.navbar-light .navbar-nav .nav-link.disabled {
	color: #a6abbd
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
	color: <?= $themeColor; ?>
}
.navbar-light .navbar-toggler {
	color: rgba(20,20,31,.4);
	border-color: #363642
}
.navbar-light .navbar-toggler-icon {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(20, 20, 31, 0.4)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}
.navbar-light .navbar-text {
	color: rgba(20,20,31,.4)
}
.navbar-light .navbar-text a, .navbar-light .navbar-text a:focus, .navbar-light .navbar-text a:hover {
	color: <?= $themeColor; ?>
}
.navbar-dark .navbar-brand, .navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
	color: #f6f7f9
}
.navbar-dark .navbar-nav .nav-link {
	color: hsla(0,0%,100%,.8)
}
.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
	color: #fff
}
.navbar-dark .navbar-nav .nav-link.disabled {
	color: hsla(0,0%,100%,.6)
}
.navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
	color: #fff
}
.navbar-dark .navbar-toggler {
	color: hsla(0,0%,100%,.8);
	border-color: #fff
}
.navbar-dark .navbar-toggler-icon {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}
.navbar-dark .navbar-text {
	color: hsla(0,0%,100%,.8)
}
.navbar-dark .navbar-text a, .navbar-dark .navbar-text a:focus, .navbar-dark .navbar-text a:hover {
	color: #fff
}
.card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-color: #fff;
	background-clip: border-box;
	border: 1px solid rgba(20,20,31,.12);
	border-radius: .25rem
}
.card>hr {
	margin-right: 0;
	margin-left: 0
}
.card>.list-group {
	border-top: inherit;
	border-bottom: inherit
}
.card>.list-group:first-child {
	border-top-width: 0;
	border-top-left-radius: calc(.25rem - 1px);
	border-top-right-radius: calc(.25rem - 1px)
}
.card>.list-group:last-child {
	border-bottom-width: 0;
	border-bottom-right-radius: calc(.25rem - 1px);
	border-bottom-left-radius: calc(.25rem - 1px)
}
.card-body {
	flex: 1 1 auto;
	min-height: 1px;
	padding: 1rem
}
.card-title {
	margin-bottom: 1rem
}
.card-subtitle {
	margin-top: -.5rem
}
.card-subtitle, .card-text:last-child {
	margin-bottom: 0
}
.card-link:hover {
	text-decoration: none
}
.card-link+.card-link {
	margin-left: 1rem
}
.card-header {
	padding: 1rem;
	margin-bottom: 0;
	background-color: transparent;
	border-bottom: 1px solid rgba(20,20,31,.12)
}
.card-header:first-child {
	border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}
.card-header+.list-group .list-group-item:first-child {
	border-top: 0
}
.card-footer {
	padding: 1rem;
	background-color: transparent;
	border-top: 1px solid rgba(20,20,31,.12)
}
.card-footer:last-child {
	border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
}
.card-header-tabs {
	margin-bottom: -1rem;
	border-bottom: 0
}
.card-header-pills, .card-header-tabs {
	margin-right: -.5rem;
	margin-left: -.5rem
}
.card-img-overlay {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	padding: 1.25rem
}
.card-img, .card-img-bottom, .card-img-top {
	flex-shrink: 0;
	width: 100%
}
.card-img, .card-img-top {
	border-top-left-radius: calc(.25rem - 1px);
	border-top-right-radius: calc(.25rem - 1px)
}
.card-img, .card-img-bottom {
	border-bottom-right-radius: calc(.25rem - 1px);
	border-bottom-left-radius: calc(.25rem - 1px)
}
.card-deck .card {
	margin-bottom: 10px
}

@media (min-width:576px) {
.card-deck {
	display: flex;
	flex-flow: row wrap;
	margin-right: -10px;
	margin-left: -10px
}
.card-deck .card {
	flex: 1 0 0%;
	margin-right: 10px;
	margin-bottom: 0;
	margin-left: 10px
}
}
.card-group>.card {
	margin-bottom: 10px
}

@media (min-width:576px) {
.card-group {
	display: flex;
	flex-flow: row wrap
}
.card-group>.card {
	flex: 1 0 0%;
	margin-bottom: 0
}
.card-group>.card+.card {
	margin-left: 0;
	border-left: 0
}
.card-group>.card:not(:last-child) {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0
}
.card-group>.card:not(:last-child) .card-header, .card-group>.card:not(:last-child) .card-img-top {
	border-top-right-radius: 0
}
.card-group>.card:not(:last-child) .card-footer, .card-group>.card:not(:last-child) .card-img-bottom {
	border-bottom-right-radius: 0
}
.card-group>.card:not(:first-child) {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0
}
.card-group>.card:not(:first-child) .card-header, .card-group>.card:not(:first-child) .card-img-top {
	border-top-left-radius: 0
}
.card-group>.card:not(:first-child) .card-footer, .card-group>.card:not(:first-child) .card-img-bottom {
	border-bottom-left-radius: 0
}
}
.card-columns .card {
	margin-bottom: 1.25rem
}

@media (min-width:576px) {
.card-columns {
	-moz-column-count: 3;
	column-count: 3;
	-moz-column-gap: 1.25rem;
	column-gap: 1.25rem;
	orphans: 1;
	widows: 1
}
.card-columns .card {
	display: inline-block;
	width: 100%
}
}
.accordion>.card {
	overflow: hidden
}
.accordion>.card:not(:last-of-type) {
	border-bottom: 0;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0
}
.accordion>.card:not(:first-of-type) {
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.accordion>.card>.card-header {
	border-radius: 0;
	margin-bottom: -1px
}
.breadcrumb {
	flex-wrap: wrap;
	padding: 0;
	margin-bottom: .5rem;
	list-style: none;
	background-color: transparent;
	border-radius: .25rem
}
.breadcrumb, .breadcrumb-item {
	display: flex
}
.breadcrumb-item+.breadcrumb-item {
	padding-left: .5rem
}
.breadcrumb-item+.breadcrumb-item:before {
	display: inline-block;
	padding-right: .5rem;
	color: #888c9b;
	content: "/"
}
.breadcrumb-item+.breadcrumb-item:hover:before {
	text-decoration: underline;
	text-decoration: none
}
.breadcrumb-item.active {
	color: #888c9b
}
.pagination {
	display: flex;
	padding-left: 0;
	list-style: none;
	border-radius: .25rem
}
.page-link {
	position: relative;
	display: block;
	padding: .5rem .75rem;
	margin-left: -1px;
	line-height: 1.25;
	color: #222230;
	background-color: transparent;
	border: 1px solid transparent
}
.page-link:hover {
	z-index: 2;
	color: <?= $themeColor; ?>;
	text-decoration: none;
	background-color: rgba(52,108,176,.08);
	border-color: transparent
}
.page-link:focus {
	z-index: 3;
	outline: 0;
	box-shadow: inset 0 0 0 4px rgba(52,108,176,.08), inset 0 0 0 5px rgba(246,247,249,.5)
}
.page-item:first-child .page-link {
	margin-left: 0;
	border-top-left-radius: .25rem;
	border-bottom-left-radius: .25rem
}
.page-item:last-child .page-link {
	border-top-right-radius: .25rem;
	border-bottom-right-radius: .25rem
}
.page-item.active .page-link {
	z-index: 3;
	color: #2e609c;
	background-color: rgba(52,108,176,.08);
	border-color: transparent
}
.page-item.disabled .page-link {
	color: #888c9b;
	pointer-events: none;
	cursor: auto;
	background-color: transparent;
	border-color: transparent
}
.pagination-lg .page-link {
	padding: .75rem 1.5rem;
	font-size: 1.25rem;
	line-height: 1.5
}
.pagination-lg .page-item:first-child .page-link {
	border-top-left-radius: .3rem;
	border-bottom-left-radius: .3rem
}
.pagination-lg .page-item:last-child .page-link {
	border-top-right-radius: .3rem;
	border-bottom-right-radius: .3rem
}
.pagination-sm .page-link {
	padding: .25rem .5rem;
	font-size: .875rem;
	line-height: 1.5
}
.pagination-sm .page-item:first-child .page-link {
	border-top-left-radius: .2rem;
	border-bottom-left-radius: .2rem
}
.pagination-sm .page-item:last-child .page-link {
	border-top-right-radius: .2rem;
	border-bottom-right-radius: .2rem
}
.badge {
	display: inline-block;
	padding: .25rem .375rem;
	font-size: 75%;
	font-weight: 700;
	line-height: 1;
	text-align: center;
	white-space: nowrap;
	vertical-align: baseline;
	border-radius: .25rem;
	transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.badge {
	transition: none
}
}
a.badge:focus, a.badge:hover {
	text-decoration: none
}
.badge:empty {
	display: none
}
.btn .badge {
	position: relative;
	top: -1px
}
.badge-pill {
	padding-right: .6em;
	padding-left: .6em;
	border-radius: 10rem
}
.badge-primary {
	color: #fff;
	background-color: <?= $themeColor; ?>
}
a.badge-primary:focus, a.badge-primary:hover {
	color: #fff;
	background-color: #285489
}
a.badge-primary.focus, a.badge-primary:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(52,108,176,.5)
}
.badge-secondary {
	color: #363642;
	background-color: #f6f7f9
}
a.badge-secondary:focus, a.badge-secondary:hover {
	color: #363642;
	background-color: #d7dce5
}
a.badge-secondary.focus, a.badge-secondary:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(246,247,249,.5)
}
.badge-success {
	color: #fff;
	background-color: #097b0a
}
a.badge-success:focus, a.badge-success:hover {
	color: #fff;
	background-color: #006f5f
}
a.badge-success.focus, a.badge-success:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(0,162,138,.5)
}
.badge-info {
	color: #fff;
	background-color: #0179a8
}
a.badge-info:focus, a.badge-info:hover {
	color: #fff;
	background-color: #015475
}
a.badge-info.focus, a.badge-info:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(1,121,168,.5)
}
.badge-warning {
	color: #363642;
	background-color: #f7c46c
}
a.badge-warning:focus, a.badge-warning:hover {
	color: #363642;
	background-color: #f4b13c
}
a.badge-warning.focus, a.badge-warning:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(247,196,108,.5)
}
.badge-danger {
	color: #fff;
	background-color: #ff0538
}
a.badge-danger:focus, a.badge-danger:hover {
	color: #fff;
	background-color: #a14e8b
}
a.badge-danger.focus, a.badge-danger:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(183,107,163,.5)
}
.badge-light {
	color: #363642;
	background-color: #f6f7f9
}
a.badge-light:focus, a.badge-light:hover {
	color: #363642;
	background-color: #d7dce5
}
a.badge-light.focus, a.badge-light:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(246,247,249,.5)
}
.badge-dark {
	color: #fff;
	background-color: #222230
}
a.badge-dark:focus, a.badge-dark:hover {
	color: #fff;
	background-color: #0d0d12
}
a.badge-dark.focus, a.badge-dark:focus {
	outline: 0;
	box-shadow: 0 0 0 1px rgba(34,34,48,.5)
}
.jumbotron {
	padding: 2rem 1rem;
	margin-bottom: 2rem;
	background-color: #e6e8ed;
	border-radius: .3rem
}

@media (min-width:576px) {
.jumbotron {
	padding: 4rem 2rem
}
}
.jumbotron-fluid {
	padding-right: 0;
	padding-left: 0;
	border-radius: 0
}
.alert {
	position: relative;
	padding: .75rem 1.25rem;
	margin-bottom: 1rem;
	border: 1px solid transparent;
	border-radius: .25rem
}
.alert-heading {
	color: inherit
}
.alert-link {
	font-weight: 400
}
.alert-dismissible {
	padding-right: 4rem
}
.alert-dismissible .close {
	position: absolute;
	top: 0;
	right: 0;
	padding: .75rem 1.25rem;
	color: inherit
}
.alert-primary {
	color: #2f5e99;
	background-color: #f7f9fc;
	border-color: <?= $themeColor; ?>
}
.alert-primary hr {
	border-top-color: #2e609c
}
.alert-primary .alert-link {
	color: #234672
}
.alert-secondary {
	color: #d2d3d6;
	background-color: #fff;
	border-color: #f6f7f9
}
.alert-secondary hr {
	border-top-color: #e7e9ef
}
.alert-secondary .alert-link {
	color: #b7b9be
}
.alert-success {
	color: #038b79;
	background-color: #f5fbfa;
	border-color: #097b0a
}
.alert-success hr {
	border-top-color: #008974
}
.alert-success .alert-link {
	color: #02594e
}
.alert-info {
	color: #046992;
	background-color: #f5fafc;
	border-color: #0179a8
}
.alert-info hr {
	border-top-color: #01678f
}
.alert-info .alert-link {
	color: #034560
}
.alert-warning {
	color: #d3a860;
	background-color: #fffdf9;
	border-color: #f7c46c
}
.alert-warning hr {
	border-top-color: #f6ba54
}
.alert-warning .alert-link {
	color: #c89238
}
.alert-danger {
	color: #9d5d8e;
	background-color: #fcf9fb;
	border-color: #ff0538
}
.alert-danger hr {
	border-top-color: #af5a98
}
.alert-danger .alert-link {
	color: #7d4a71
}
.alert-light {
	color: #d2d3d6;
	background-color: #fff;
	border-color: #f6f7f9
}
.alert-light hr {
	border-top-color: #e7e9ef
}
.alert-light .alert-link {
	color: #b7b9be
}
.alert-dark {
	color: #20202d;
	background-color: #f6f6f7;
	border-color: #222230
}
.alert-dark hr {
	border-top-color: #171721
}
.alert-dark .alert-link {
	color: #0b0b0f
}
@-webkit-keyframes progress-bar-stripes {
0% {
background-position:1rem 0
}
to {
background-position:0 0
}
}
@keyframes progress-bar-stripes {
0% {
background-position:1rem 0
}
to {
background-position:0 0
}
}
.progress {
	height: 1rem;
	line-height: 0;
	font-size: .625rem;
	background-color: #e6e8ed;
	border-radius: .25rem
}
.progress, .progress-bar {
	display: flex;
	overflow: hidden
}
.progress-bar {
	flex-direction: column;
	justify-content: center;
	color: #fff;
	text-align: center;
	white-space: nowrap;
	background-color: <?= $themeColor; ?>;
	transition: width .6s ease
}

@media (prefers-reduced-motion:reduce) {
.progress-bar {
	transition: none
}
}
.progress-bar-striped {
	background-image: linear-gradient(45deg, hsla(0,0%,100%,.15) 25%, transparent 0, transparent 50%, hsla(0,0%,100%,.15) 0, hsla(0,0%,100%,.15) 75%, transparent 0, transparent);
	background-size: 1rem 1rem
}
.progress-bar-animated {
	-webkit-animation: progress-bar-stripes 1s linear infinite;
	animation: progress-bar-stripes 1s linear infinite
}

@media (prefers-reduced-motion:reduce) {
.progress-bar-animated {
	-webkit-animation: none;
	animation: none
}
}
.media {
	display: flex;
	align-items: flex-start
}
.media-body {
	flex: 1
}
.list-group {
	display: flex;
	flex-direction: column;
	padding-left: 0;
	margin-bottom: 0;
	border-radius: .25rem
}
.list-group-item-action {
	width: 100%;
	color: #363642;
	text-align: inherit
}
.list-group-item-action:focus, .list-group-item-action:hover {
	z-index: 1;
	color: #363642;
	text-decoration: none;
	background-color: #f6f7f9
}
.list-group-item-action:active {
	color: #363642;
	background-color: #e6e8ed
}
.list-group-item {
	position: relative;
	display: block;
	padding: .75rem 1rem;
	background-color: #fff;
	border: 1px solid #ecedf1
}
.list-group-item:first-child {
	border-top-left-radius: inherit;
	border-top-right-radius: inherit
}
.list-group-item:last-child {
	border-bottom-right-radius: inherit;
	border-bottom-left-radius: inherit
}
.list-group-item.disabled, .list-group-item:disabled {
	color: #888c9b;
	pointer-events: none;
	background-color: #fff
}
.list-group-item.active {
	z-index: 2;
	background-color: #fff;
	border-color: <?= $themeColor; ?>
}
.list-group-item+.list-group-item {
	border-top-width: 0
}
.list-group-item+.list-group-item.active {
	margin-top: -1px;
	border-top-width: 1px
}
.list-group-horizontal {
	flex-direction: row
}
.list-group-horizontal>.list-group-item:first-child {
	border-bottom-left-radius: .25rem;
	border-top-right-radius: 0
}
.list-group-horizontal>.list-group-item:last-child {
	border-top-right-radius: .25rem;
	border-bottom-left-radius: 0
}
.list-group-horizontal>.list-group-item.active {
	margin-top: 0
}
.list-group-horizontal>.list-group-item+.list-group-item {
	border-top-width: 1px;
	border-left-width: 0
}
.list-group-horizontal>.list-group-item+.list-group-item.active {
	margin-left: -1px;
	border-left-width: 1px
}

@media (min-width:576px) {
.list-group-horizontal-sm {
	flex-direction: row
}
.list-group-horizontal-sm>.list-group-item:first-child {
	border-bottom-left-radius: .25rem;
	border-top-right-radius: 0
}
.list-group-horizontal-sm>.list-group-item:last-child {
	border-top-right-radius: .25rem;
	border-bottom-left-radius: 0
}
.list-group-horizontal-sm>.list-group-item.active {
	margin-top: 0
}
.list-group-horizontal-sm>.list-group-item+.list-group-item {
	border-top-width: 1px;
	border-left-width: 0
}
.list-group-horizontal-sm>.list-group-item+.list-group-item.active {
	margin-left: -1px;
	border-left-width: 1px
}
}

@media (min-width:768px) {
.list-group-horizontal-md {
	flex-direction: row
}
.list-group-horizontal-md>.list-group-item:first-child {
	border-bottom-left-radius: .25rem;
	border-top-right-radius: 0
}
.list-group-horizontal-md>.list-group-item:last-child {
	border-top-right-radius: .25rem;
	border-bottom-left-radius: 0
}
.list-group-horizontal-md>.list-group-item.active {
	margin-top: 0
}
.list-group-horizontal-md>.list-group-item+.list-group-item {
	border-top-width: 1px;
	border-left-width: 0
}
.list-group-horizontal-md>.list-group-item+.list-group-item.active {
	margin-left: -1px;
	border-left-width: 1px
}
}

@media (min-width:992px) {
.list-group-horizontal-lg {
	flex-direction: row
}
.list-group-horizontal-lg>.list-group-item:first-child {
	border-bottom-left-radius: .25rem;
	border-top-right-radius: 0
}
.list-group-horizontal-lg>.list-group-item:last-child {
	border-top-right-radius: .25rem;
	border-bottom-left-radius: 0
}
.list-group-horizontal-lg>.list-group-item.active {
	margin-top: 0
}
.list-group-horizontal-lg>.list-group-item+.list-group-item {
	border-top-width: 1px;
	border-left-width: 0
}
.list-group-horizontal-lg>.list-group-item+.list-group-item.active {
	margin-left: -1px;
	border-left-width: 1px
}
}

@media (min-width:1200px) {
.list-group-horizontal-xl {
	flex-direction: row
}
.list-group-horizontal-xl>.list-group-item:first-child {
	border-bottom-left-radius: .25rem;
	border-top-right-radius: 0
}
.list-group-horizontal-xl>.list-group-item:last-child {
	border-top-right-radius: .25rem;
	border-bottom-left-radius: 0
}
.list-group-horizontal-xl>.list-group-item.active {
	margin-top: 0
}
.list-group-horizontal-xl>.list-group-item+.list-group-item {
	border-top-width: 1px;
	border-left-width: 0
}
.list-group-horizontal-xl>.list-group-item+.list-group-item.active {
	margin-left: -1px;
	border-left-width: 1px
}
}
.list-group-flush {
	border-radius: 0
}
.list-group-flush>.list-group-item {
	border-width: 0 0 1px
}
.list-group-flush>.list-group-item:last-child {
	border-bottom-width: 0
}
.list-group-item-primary {
	color: #25426a;
	background-color: #c6d6e9
}
.list-group-item-primary.list-group-item-action:focus, .list-group-item-primary.list-group-item-action:hover {
	color: #25426a;
	background-color: #b4c9e2
}
.list-group-item-primary.list-group-item-action.active {
	color: #fff;
	background-color: #25426a;
	border-color: #25426a
}
.list-group-item-secondary {
	color: #8a8a90;
	background-color: #fcfdfd
}
.list-group-item-secondary.list-group-item-action:focus, .list-group-item-secondary.list-group-item-action:hover {
	color: #8a8a90;
	background-color: #edf3f3
}
.list-group-item-secondary.list-group-item-action.active {
	color: #fff;
	background-color: #8a8a90;
	border-color: #8a8a90
}
.list-group-item-success {
	color: #0a5e57;
	background-color: #b8e5de
}
.list-group-item-success.list-group-item-action:focus, .list-group-item-success.list-group-item-action:hover {
	color: #0a5e57;
	background-color: #a5ded5
}
.list-group-item-success.list-group-item-action.active {
	color: #fff;
	background-color: #0a5e57;
	border-color: #0a5e57
}
.list-group-item-info {
	color: #0a4966;
	background-color: #b8d9e7
}
.list-group-item-info.list-group-item-action:focus, .list-group-item-info.list-group-item-action:hover {
	color: #0a4966;
	background-color: #a5cfe1
}
.list-group-item-info.list-group-item-action.active {
	color: #fff;
	background-color: #0a4966;
	border-color: #0a4966
}
.list-group-item-warning {
	color: #8a7047;
	background-color: #fdeed6
}
.list-group-item-warning.list-group-item-action:focus, .list-group-item-warning.list-group-item-action:hover {
	color: #8a7047;
	background-color: #fce4be
}
.list-group-item-warning.list-group-item-action.active {
	color: #fff;
	background-color: #8a7047;
	border-color: #8a7047
}
.list-group-item-danger {
	color: #694164;
	background-color: #ebd6e5
}
.list-group-item-danger.list-group-item-action:focus, .list-group-item-danger.list-group-item-action:hover {
	color: #694164;
	background-color: #e3c5da
}
.list-group-item-danger.list-group-item-action.active {
	color: #fff;
	background-color: #694164;
	border-color: #694164
}
.list-group-item-light {
	color: #8a8a90;
	background-color: #fcfdfd
}
.list-group-item-light.list-group-item-action:focus, .list-group-item-light.list-group-item-action:hover {
	color: #8a8a90;
	background-color: #edf3f3
}
.list-group-item-light.list-group-item-action.active {
	color: #fff;
	background-color: #8a8a90;
	border-color: #8a8a90
}
.list-group-item-dark {
	color: #1b1b28;
	background-color: #c1c1c5
}
.list-group-item-dark.list-group-item-action:focus, .list-group-item-dark.list-group-item-action:hover {
	color: #1b1b28;
	background-color: #b4b4b9
}
.list-group-item-dark.list-group-item-action.active {
	color: #fff;
	background-color: #1b1b28;
	border-color: #1b1b28
}
.close {
	float: right;
	font-size: 1.5rem;
	font-weight: 700;
	line-height: 1;
	color: #888c9b;
	text-shadow: none;
	opacity: .5
}
.close:hover {
	color: #888c9b;
	text-decoration: none
}
.close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover {
	opacity: .75
}
button.close {
	padding: 0;
	background-color: transparent;
	border: 0
}
a.close.disabled {
	pointer-events: none
}
.toast {
	max-width: 350px;
	overflow: hidden;
	font-size: .875rem;
	background-color: hsla(0,0%,100%,.85);
	background-clip: padding-box;
	border: 1px solid rgba(0,0,0,.1);
	box-shadow: 0 .25rem .75rem rgba(20,20,31,.1);
	-webkit-backdrop-filter: blur(10px);
	backdrop-filter: blur(10px);
	opacity: 0;
	border-radius: .25rem
}
.toast:not(:last-child) {
	margin-bottom: .75rem
}
.toast.showing {
	opacity: 1
}
.toast.show {
	display: block;
	opacity: 1
}
.toast.hide {
	display: none
}
.toast-header {
	display: flex;
	align-items: center;
	padding: .25rem .75rem;
	color: #888c9b;
	background-color: hsla(0,0%,100%,.85);
	background-clip: padding-box;
	border-bottom: 1px solid rgba(0,0,0,.05)
}
.toast-body {
	padding: .75rem
}
.modal-open {
	overflow: hidden
}
.modal-open .modal {
	overflow-x: hidden;
	overflow-y: auto
}
.modal {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1050;
	display: none;
	width: 100%;
	height: 100%;
	overflow: hidden;
	outline: 0
}
.modal-dialog {
	position: relative;
	width: auto;
	margin: .5rem;
	pointer-events: none
}
.modal.fade .modal-dialog {
	transition: transform .3s ease-out;
	transform: translateY(-50px)
}

@media (prefers-reduced-motion:reduce) {
.modal.fade .modal-dialog {
	transition: none
}
}
.modal.show .modal-dialog {
	transform: none
}
.modal.modal-static .modal-dialog {
	transform: scale(1.02)
}
.modal-dialog-scrollable {
	display: flex;
	max-height: calc(100% - 1rem)
}
.modal-dialog-scrollable .modal-content {
	max-height: calc(100vh - 1rem);
	overflow: hidden
}
.modal-dialog-scrollable .modal-footer, .modal-dialog-scrollable .modal-header {
	flex-shrink: 0
}
.modal-dialog-scrollable .modal-body {
	overflow-y: auto
}
.modal-dialog-centered {
	display: flex;
	align-items: center;
	min-height: calc(100% - 1rem)
}
.modal-dialog-centered:before {
	display: block;
	height: calc(100vh - 1rem);
	height: -webkit-min-content;
	height: -moz-min-content;
	height: min-content;
	content: ""
}
.modal-dialog-centered.modal-dialog-scrollable {
	flex-direction: column;
	justify-content: center;
	height: 100%
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
	max-height: none
}
.modal-dialog-centered.modal-dialog-scrollable:before {
	content: none
}
.modal-content {
	position: relative;
	display: flex;
	flex-direction: column;
	width: 100%;
	pointer-events: auto;
	background-color: #fff;
	background-clip: padding-box;
	border: 1px solid rgba(20,20,31,.2);
	border-radius: .3rem;
	outline: 0
}
.modal-backdrop {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1040;
	width: 100vw;
	height: 100vh;
	background-color: #14141f
}
.modal-backdrop.fade {
	opacity: 0
}
.modal-backdrop.show {
	opacity: .6
}
.modal-header {
	display: flex;
	align-items: flex-start;
	justify-content: space-between;
	padding: 1rem;
	border-bottom: 0 solid rgba(34,34,48,.1);
	border-top-left-radius: calc(.3rem - 1px);
	border-top-right-radius: calc(.3rem - 1px)
}
.modal-header .close {
	padding: 1rem;
	margin: -1rem -1rem -1rem auto
}
.modal-title {
	margin-bottom: 0;
	line-height: 1.5
}
.modal-body {
	position: relative;
	flex: 1 1 auto;
	padding: 1rem
}
.modal-footer {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: flex-end;
	padding: .75rem;
	border-top: 0 solid rgba(34,34,48,.1);
	border-bottom-right-radius: calc(.3rem - 1px);
	border-bottom-left-radius: calc(.3rem - 1px)
}
.modal-footer>* {
	margin: .25rem
}
.modal-scrollbar-measure {
	position: absolute;
	top: -9999px;
	width: 50px;
	height: 50px;
	overflow: scroll
}

@media (min-width:576px) {
.modal-dialog {
	max-width: 500px;
	margin: 1.75rem auto
}
.modal-dialog-scrollable {
	max-height: calc(100% - 3.5rem)
}
.modal-dialog-scrollable .modal-content {
	max-height: calc(100vh - 3.5rem)
}
.modal-dialog-centered {
	min-height: calc(100% - 3.5rem)
}
.modal-dialog-centered:before {
	height: calc(100vh - 3.5rem);
	height: -webkit-min-content;
	height: -moz-min-content;
	height: min-content
}
.modal-sm {
	max-width: 300px
}
}

@media (min-width:992px) {
.modal-lg, .modal-xl {
	max-width: 800px
}
}

@media (min-width:1200px) {
.modal-xl {
	max-width: 1140px
}
}
.tooltip {
	position: absolute;
	z-index: 1070;
	display: block;
	margin: 0;
	font-family: -apple-system, BlinkMacSystemFont, Fira Sans, Helvetica Neue, Apple Color Emoji, sans-serif;
	font-style: normal;
	font-weight: 400;
	line-height: 1.5;
	text-align: left;
	text-align: start;
	text-decoration: none;
	text-shadow: none;
	text-transform: none;
	letter-spacing: normal;
	word-break: normal;
	word-spacing: normal;
	white-space: normal;
	line-break: auto;
	font-size: .875rem;
	word-wrap: break-word;
	opacity: 0
}
.tooltip.show {
	opacity: .98
}
.tooltip .arrow {
	position: absolute;
	display: block;
	width: .8rem;
	height: .4rem
}
.tooltip .arrow:before {
	position: absolute;
	content: "";
	border-color: transparent;
	border-style: solid
}
.bs-tooltip-auto[x-placement^=top], .bs-tooltip-top {
	padding: .4rem 0
}
.bs-tooltip-auto[x-placement^=top] .arrow, .bs-tooltip-top .arrow {
	bottom: 0
}
.bs-tooltip-auto[x-placement^=top] .arrow:before, .bs-tooltip-top .arrow:before {
	top: 0;
	border-width: .4rem .4rem 0;
	border-top-color: #14141f
}
.bs-tooltip-auto[x-placement^=right], .bs-tooltip-right {
	padding: 0 .4rem
}
.bs-tooltip-auto[x-placement^=right] .arrow, .bs-tooltip-right .arrow {
	left: 0;
	width: .4rem;
	height: .8rem
}
.bs-tooltip-auto[x-placement^=right] .arrow:before, .bs-tooltip-right .arrow:before {
	right: 0;
	border-width: .4rem .4rem .4rem 0;
	border-right-color: #14141f
}
.bs-tooltip-auto[x-placement^=bottom], .bs-tooltip-bottom {
	padding: .4rem 0
}
.bs-tooltip-auto[x-placement^=bottom] .arrow, .bs-tooltip-bottom .arrow {
	top: 0
}
.bs-tooltip-auto[x-placement^=bottom] .arrow:before, .bs-tooltip-bottom .arrow:before {
	bottom: 0;
	border-width: 0 .4rem .4rem;
	border-bottom-color: #14141f
}
.bs-tooltip-auto[x-placement^=left], .bs-tooltip-left {
	padding: 0 .4rem
}
.bs-tooltip-auto[x-placement^=left] .arrow, .bs-tooltip-left .arrow {
	right: 0;
	width: .4rem;
	height: .8rem
}
.bs-tooltip-auto[x-placement^=left] .arrow:before, .bs-tooltip-left .arrow:before {
	left: 0;
	border-width: .4rem 0 .4rem .4rem;
	border-left-color: #14141f
}
.tooltip-inner {
	max-width: 200px;
	padding: .25rem .5rem;
	color: #fff;
	text-align: center;
	background-color: #14141f;
	border-radius: .25rem
}
.popover {
	top: 0;
	left: 0;
	z-index: 1060;
	max-width: 276px;
	font-family: -apple-system, BlinkMacSystemFont, Fira Sans, Helvetica Neue, Apple Color Emoji, sans-serif;
	font-style: normal;
	font-weight: 400;
	line-height: 1.5;
	text-align: left;
	text-align: start;
	text-decoration: none;
	text-shadow: none;
	text-transform: none;
	letter-spacing: normal;
	word-break: normal;
	word-spacing: normal;
	white-space: normal;
	line-break: auto;
	font-size: .875rem;
	word-wrap: break-word;
	background-color: #fff;
	background-clip: padding-box;
	border: 1px solid rgba(34,34,48,.1);
	border-radius: .3rem
}
.popover, .popover .arrow {
	position: absolute;
	display: block
}
.popover .arrow {
	width: 1rem;
	height: .5rem;
	margin: 0 .3rem
}
.popover .arrow:after, .popover .arrow:before {
	position: absolute;
	display: block;
	content: "";
	border-color: transparent;
	border-style: solid
}
.bs-popover-auto[x-placement^=top], .bs-popover-top {
	margin-bottom: .5rem
}
.bs-popover-auto[x-placement^=top]>.arrow, .bs-popover-top>.arrow {
	bottom: calc(-.5rem - 1px)
}
.bs-popover-auto[x-placement^=top]>.arrow:before, .bs-popover-top>.arrow:before {
	bottom: 0;
	border-width: .5rem .5rem 0;
	border-top-color: rgba(34,34,48,.15)
}
.bs-popover-auto[x-placement^=top]>.arrow:after, .bs-popover-top>.arrow:after {
	bottom: 1px;
	border-width: .5rem .5rem 0;
	border-top-color: #fff
}
.bs-popover-auto[x-placement^=right], .bs-popover-right {
	margin-left: .5rem
}
.bs-popover-auto[x-placement^=right]>.arrow, .bs-popover-right>.arrow {
	left: calc(-.5rem - 1px);
	width: .5rem;
	height: 1rem;
	margin: .3rem 0
}
.bs-popover-auto[x-placement^=right]>.arrow:before, .bs-popover-right>.arrow:before {
	left: 0;
	border-width: .5rem .5rem .5rem 0;
	border-right-color: rgba(34,34,48,.15)
}
.bs-popover-auto[x-placement^=right]>.arrow:after, .bs-popover-right>.arrow:after {
	left: 1px;
	border-width: .5rem .5rem .5rem 0;
	border-right-color: #fff
}
.bs-popover-auto[x-placement^=bottom], .bs-popover-bottom {
	margin-top: .5rem
}
.bs-popover-auto[x-placement^=bottom]>.arrow, .bs-popover-bottom>.arrow {
	top: calc(-.5rem - 1px)
}
.bs-popover-auto[x-placement^=bottom]>.arrow:before, .bs-popover-bottom>.arrow:before {
	top: 0;
	border-width: 0 .5rem .5rem;
	border-bottom-color: rgba(34,34,48,.15)
}
.bs-popover-auto[x-placement^=bottom]>.arrow:after, .bs-popover-bottom>.arrow:after {
	top: 1px;
	border-width: 0 .5rem .5rem;
	border-bottom-color: #fff
}
.bs-popover-auto[x-placement^=bottom] .popover-header:before, .bs-popover-bottom .popover-header:before {
	position: absolute;
	top: 0;
	left: 50%;
	display: block;
	width: 1rem;
	margin-left: -.5rem;
	content: "";
	border-bottom: 1px solid #f7f7f7
}
.bs-popover-auto[x-placement^=left], .bs-popover-left {
	margin-right: .5rem
}
.bs-popover-auto[x-placement^=left]>.arrow, .bs-popover-left>.arrow {
	right: calc(-.5rem - 1px);
	width: .5rem;
	height: 1rem;
	margin: .3rem 0
}
.bs-popover-auto[x-placement^=left]>.arrow:before, .bs-popover-left>.arrow:before {
	right: 0;
	border-width: .5rem 0 .5rem .5rem;
	border-left-color: rgba(34,34,48,.15)
}
.bs-popover-auto[x-placement^=left]>.arrow:after, .bs-popover-left>.arrow:after {
	right: 1px;
	border-width: .5rem 0 .5rem .5rem;
	border-left-color: #fff
}
.popover-header {
	padding: .5rem .75rem;
	margin-bottom: 0;
	font-size: 1rem;
	background-color: #f7f7f7;
	border-bottom: 1px solid #ebebeb;
	border-top-left-radius: calc(.3rem - 1px);
	border-top-right-radius: calc(.3rem - 1px)
}
.popover-header:empty {
	display: none
}
.popover-body {
	padding: .5rem .75rem;
	color: #363642
}
.carousel {
	position: relative
}
.carousel.pointer-event {
	touch-action: pan-y
}
.carousel-inner {
	position: relative;
	width: 100%;
	overflow: hidden
}
.carousel-inner:after {
	display: block;
	clear: both;
	content: ""
}
.carousel-item {
	position: relative;
	display: none;
	float: left;
	width: 100%;
	margin-right: -100%;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: transform .6s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.carousel-item {
	transition: none
}
}
.carousel-item-next, .carousel-item-prev, .carousel-item.active {
	display: block
}
.active.carousel-item-right, .carousel-item-next:not(.carousel-item-left) {
	transform: translateX(100%)
}
.active.carousel-item-left, .carousel-item-prev:not(.carousel-item-right) {
	transform: translateX(-100%)
}
.carousel-fade .carousel-item {
	opacity: 0;
	transition-property: opacity;
	transform: none
}
.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
	z-index: 1;
	opacity: 1
}
.carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-right {
	z-index: 0;
	opacity: 0;
	transition: opacity 0s .6s
}

@media (prefers-reduced-motion:reduce) {
.carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-right {
	transition: none
}
}
.carousel-control-next, .carousel-control-prev {
	position: absolute;
	top: 0;
	bottom: 0;
	z-index: 1;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 15%;
	color: #fff;
	text-align: center;
	opacity: .5;
	transition: opacity .15s ease
}

@media (prefers-reduced-motion:reduce) {
.carousel-control-next, .carousel-control-prev {
	transition: none
}
}
.carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
	color: #fff;
	text-decoration: none;
	outline: 0;
	opacity: .9
}
.carousel-control-prev {
	left: 0
}
.carousel-control-next {
	right: 0
}
.carousel-control-next-icon, .carousel-control-prev-icon {
	display: inline-block;
	width: 20px;
	height: 20px;
	background: no-repeat 50%/100% 100%
}
.carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3E%3C/svg%3E")
}
.carousel-control-next-icon {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8'%3E%3Cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3E%3C/svg%3E")
}
.carousel-indicators {
	position: absolute;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 15;
	display: flex;
	justify-content: center;
	padding-left: 0;
	margin-right: 15%;
	margin-left: 15%;
	list-style: none
}
.carousel-indicators li {
	box-sizing: content-box;
	flex: 0 1 auto;
	width: 30px;
	height: 3px;
	margin-right: 3px;
	margin-left: 3px;
	text-indent: -999px;
	cursor: pointer;
	background-color: #fff;
	background-clip: padding-box;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	opacity: .5;
	transition: opacity .6s ease
}

@media (prefers-reduced-motion:reduce) {
.carousel-indicators li {
	transition: none
}
}
.carousel-indicators .active {
	opacity: 1
}
.carousel-caption {
	position: absolute;
	right: 15%;
	bottom: 20px;
	left: 15%;
	z-index: 10;
	padding-top: 20px;
	padding-bottom: 20px;
	color: #fff;
	text-align: center
}
@-webkit-keyframes spinner-border {
to {
transform:rotate(1turn)
}
}
@keyframes spinner-border {
to {
transform:rotate(1turn)
}
}
.spinner-border {
	display: inline-block;
	width: 2rem;
	height: 2rem;
	vertical-align: text-bottom;
	border: .25em solid;
	border-right: .25em solid transparent;
	border-radius: 50%;
	-webkit-animation: spinner-border .75s linear infinite;
	animation: spinner-border .75s linear infinite
}
.spinner-border-sm {
	width: 1rem;
	height: 1rem;
	border-width: .2em
}
@-webkit-keyframes spinner-grow {
0% {
transform:scale(0)
}
50% {
opacity:1;
transform:none
}
}
@keyframes spinner-grow {
0% {
transform:scale(0)
}
50% {
opacity:1;
transform:none
}
}
.spinner-grow {
	display: inline-block;
	width: 2rem;
	height: 2rem;
	vertical-align: text-bottom;
	background-color: currentColor;
	border-radius: 50%;
	opacity: 0;
	-webkit-animation: spinner-grow .75s linear infinite;
	animation: spinner-grow .75s linear infinite
}
.spinner-grow-sm {
	width: 1rem;
	height: 1rem
}
.align-baseline {
	vertical-align: baseline!important
}
.align-top {
	vertical-align: top!important
}
.align-middle {
	vertical-align: middle!important
}
.align-bottom {
	vertical-align: bottom!important
}
.align-text-bottom {
	vertical-align: text-bottom!important
}
.align-text-top {
	vertical-align: text-top!important
}
.bg-primary {
	background-color: <?= $themeColor; ?>!important
}
a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover {
	background-color: #285489!important
}
.bg-secondary {
	background-color: #f6f7f9!important
}
a.bg-secondary:focus, a.bg-secondary:hover, button.bg-secondary:focus, button.bg-secondary:hover {
	background-color: #d7dce5!important
}
.bg-success {
	background-color: #097b0a!important
}
a.bg-success:focus, a.bg-success:hover, button.bg-success:focus, button.bg-success:hover {
	background-color: #006f5f!important
}
.bg-info {
	background-color: #0179a8!important
}
a.bg-info:focus, a.bg-info:hover, button.bg-info:focus, button.bg-info:hover {
	background-color: #015475!important
}
.bg-warning {
	background-color: #f7c46c!important
}
a.bg-warning:focus, a.bg-warning:hover, button.bg-warning:focus, button.bg-warning:hover {
	background-color: #f4b13c!important
}
.bg-danger {
	background-color: #ff0538!important
}
a.bg-danger:focus, a.bg-danger:hover, button.bg-danger:focus, button.bg-danger:hover {
	background-color: #a14e8b!important
}
.bg-light {
	background-color: #f6f7f9!important
}
a.bg-light:focus, a.bg-light:hover, button.bg-light:focus, button.bg-light:hover {
	background-color: #d7dce5!important
}
.bg-dark {
	background-color: #222230!important
}
a.bg-dark:focus, a.bg-dark:hover, button.bg-dark:focus, button.bg-dark:hover {
	background-color: #0d0d12!important
}
.bg-transparent {
	background-color: transparent!important
}
.border {
	border: 1px solid rgba(34,34,48,.1)!important
}
.border-top {
	border-top: 1px solid rgba(34,34,48,.1)!important
}
.border-right {
	border-right: 1px solid rgba(34,34,48,.1)!important
}
.border-bottom {
	border-bottom: 1px solid rgba(34,34,48,.1)!important
}
.border-left {
	border-left: 1px solid rgba(34,34,48,.1)!important
}
.border-0 {
	border: 0!important
}
.border-top-0 {
	border-top: 0!important
}
.border-right-0 {
	border-right: 0!important
}
.border-bottom-0 {
	border-bottom: 0!important
}
.border-left-0 {
	border-left: 0!important
}
.border-primary {
	border-color: <?= $themeColor; ?>!important
}
.border-secondary {
	border-color: #f6f7f9!important
}
.border-success {
	border-color: #097b0a!important
}
.border-info {
	border-color: #0179a8!important
}
.border-warning {
	border-color: #f7c46c!important
}
.border-danger {
	border-color: #ff0538!important
}
.border-light {
	border-color: #f6f7f9!important
}
.border-dark {
	border-color: #222230!important
}
.border-white {
	border-color: #fff!important
}
.rounded-sm {
	border-radius: .2rem!important
}
.rounded {
	border-radius: .25rem!important
}
.rounded-top {
	border-top-left-radius: .25rem!important
}
.rounded-right, .rounded-top {
	border-top-right-radius: .25rem!important
}
.rounded-bottom, .rounded-right {
	border-bottom-right-radius: .25rem!important
}
.rounded-bottom, .rounded-left {
	border-bottom-left-radius: .25rem!important
}
.rounded-left {
	border-top-left-radius: .25rem!important
}
.rounded-lg {
	border-radius: .3rem!important
}
.rounded-circle {
	border-radius: 50%!important
}
.rounded-pill {
	border-radius: 50rem!important
}
.rounded-0 {
	border-radius: 0!important
}
.clearfix:after {
	display: block;
	clear: both;
	content: ""
}
.d-none {
	display: none!important
}
.d-inline {
	display: inline!important
}
.d-inline-block {
	display: inline-block!important
}
.d-block {
	display: block!important
}
.d-table {
	display: table!important
}
.d-table-row {
	display: table-row!important
}
.d-table-cell {
	display: table-cell!important
}
.d-flex {
	display: flex!important
}
.d-inline-flex {
	display: inline-flex!important
}

@media (min-width:576px) {
.d-sm-none {
	display: none!important
}
.d-sm-inline {
	display: inline!important
}
.d-sm-inline-block {
	display: inline-block!important
}
.d-sm-block {
	display: block!important
}
.d-sm-table {
	display: table!important
}
.d-sm-table-row {
	display: table-row!important
}
.d-sm-table-cell {
	display: table-cell!important
}
.d-sm-flex {
	display: flex!important
}
.d-sm-inline-flex {
	display: inline-flex!important
}
}

@media (min-width:768px) {
.d-md-none {
	display: none!important
}
.d-md-inline {
	display: inline!important
}
.d-md-inline-block {
	display: inline-block!important
}
.d-md-block {
	display: block!important
}
.d-md-table {
	display: table!important
}
.d-md-table-row {
	display: table-row!important
}
.d-md-table-cell {
	display: table-cell!important
}
.d-md-flex {
	display: flex!important
}
.d-md-inline-flex {
	display: inline-flex!important
}
}

@media (min-width:992px) {
.d-lg-none {
	display: none!important
}
.d-lg-inline {
	display: inline!important
}
.d-lg-inline-block {
	display: inline-block!important
}
.d-lg-block {
	display: block!important
}
.d-lg-table {
	display: table!important
}
.d-lg-table-row {
	display: table-row!important
}
.d-lg-table-cell {
	display: table-cell!important
}
.d-lg-flex {
	display: flex!important
}
.d-lg-inline-flex {
	display: inline-flex!important
}
}

@media (min-width:1200px) {
.d-xl-none {
	display: none!important
}
.d-xl-inline {
	display: inline!important
}
.d-xl-inline-block {
	display: inline-block!important
}
.d-xl-block {
	display: block!important
}
.d-xl-table {
	display: table!important
}
.d-xl-table-row {
	display: table-row!important
}
.d-xl-table-cell {
	display: table-cell!important
}
.d-xl-flex {
	display: flex!important
}
.d-xl-inline-flex {
	display: inline-flex!important
}
}

@media print {
.d-print-none {
	display: none!important
}
.d-print-inline {
	display: inline!important
}
.d-print-inline-block {
	display: inline-block!important
}
.d-print-block {
	display: block!important
}
.d-print-table {
	display: table!important
}
.d-print-table-row {
	display: table-row!important
}
.d-print-table-cell {
	display: table-cell!important
}
.d-print-flex {
	display: flex!important
}
.d-print-inline-flex {
	display: inline-flex!important
}
}
.embed-responsive {
	position: relative;
	display: block;
	width: 100%;
	padding: 0;
	overflow: hidden
}
.embed-responsive:before {
	display: block;
	content: ""
}
.embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border: 0
}
.embed-responsive-21by9:before {
	padding-top: 42.857143%
}
.embed-responsive-16by9:before {
	padding-top: 56.25%
}
.embed-responsive-4by3:before {
	padding-top: 75%
}
.embed-responsive-1by1:before {
	padding-top: 100%
}
.flex-row {
	flex-direction: row!important
}
.flex-column {
	flex-direction: column!important
}
.flex-row-reverse {
	flex-direction: row-reverse!important
}
.flex-column-reverse {
	flex-direction: column-reverse!important
}
.flex-wrap {
	flex-wrap: wrap!important
}
.flex-nowrap {
	flex-wrap: nowrap!important
}
.flex-wrap-reverse {
	flex-wrap: wrap-reverse!important
}
.flex-fill {
	flex: 1 1 auto!important
}
.flex-grow-0 {
	flex-grow: 0!important
}
.flex-grow-1 {
	flex-grow: 1!important
}
.flex-shrink-0 {
	flex-shrink: 0!important
}
.flex-shrink-1 {
	flex-shrink: 1!important
}
.justify-content-start {
	justify-content: flex-start!important
}
.justify-content-end {
	justify-content: flex-end!important
}
.justify-content-center {
	justify-content: center!important
}
.justify-content-between {
	justify-content: space-between!important
}
.justify-content-around {
	justify-content: space-around!important
}
.align-items-start {
	align-items: flex-start!important
}
.align-items-end {
	align-items: flex-end!important
}
.align-items-center {
	align-items: center!important
}
.align-items-baseline {
	align-items: baseline!important
}
.align-items-stretch {
	align-items: stretch!important
}
.align-content-start {
	align-content: flex-start!important
}
.align-content-end {
	align-content: flex-end!important
}
.align-content-center {
	align-content: center!important
}
.align-content-between {
	align-content: space-between!important
}
.align-content-around {
	align-content: space-around!important
}
.align-content-stretch {
	align-content: stretch!important
}
.align-self-auto {
	align-self: auto!important
}
.align-self-start {
	align-self: flex-start!important
}
.align-self-end {
	align-self: flex-end!important
}
.align-self-center {
	align-self: center!important
}
.align-self-baseline {
	align-self: baseline!important
}
.align-self-stretch {
	align-self: stretch!important
}

@media (min-width:576px) {
.flex-sm-row {
	flex-direction: row!important
}
.flex-sm-column {
	flex-direction: column!important
}
.flex-sm-row-reverse {
	flex-direction: row-reverse!important
}
.flex-sm-column-reverse {
	flex-direction: column-reverse!important
}
.flex-sm-wrap {
	flex-wrap: wrap!important
}
.flex-sm-nowrap {
	flex-wrap: nowrap!important
}
.flex-sm-wrap-reverse {
	flex-wrap: wrap-reverse!important
}
.flex-sm-fill {
	flex: 1 1 auto!important
}
.flex-sm-grow-0 {
	flex-grow: 0!important
}
.flex-sm-grow-1 {
	flex-grow: 1!important
}
.flex-sm-shrink-0 {
	flex-shrink: 0!important
}
.flex-sm-shrink-1 {
	flex-shrink: 1!important
}
.justify-content-sm-start {
	justify-content: flex-start!important
}
.justify-content-sm-end {
	justify-content: flex-end!important
}
.justify-content-sm-center {
	justify-content: center!important
}
.justify-content-sm-between {
	justify-content: space-between!important
}
.justify-content-sm-around {
	justify-content: space-around!important
}
.align-items-sm-start {
	align-items: flex-start!important
}
.align-items-sm-end {
	align-items: flex-end!important
}
.align-items-sm-center {
	align-items: center!important
}
.align-items-sm-baseline {
	align-items: baseline!important
}
.align-items-sm-stretch {
	align-items: stretch!important
}
.align-content-sm-start {
	align-content: flex-start!important
}
.align-content-sm-end {
	align-content: flex-end!important
}
.align-content-sm-center {
	align-content: center!important
}
.align-content-sm-between {
	align-content: space-between!important
}
.align-content-sm-around {
	align-content: space-around!important
}
.align-content-sm-stretch {
	align-content: stretch!important
}
.align-self-sm-auto {
	align-self: auto!important
}
.align-self-sm-start {
	align-self: flex-start!important
}
.align-self-sm-end {
	align-self: flex-end!important
}
.align-self-sm-center {
	align-self: center!important
}
.align-self-sm-baseline {
	align-self: baseline!important
}
.align-self-sm-stretch {
	align-self: stretch!important
}
}

@media (min-width:768px) {
.flex-md-row {
	flex-direction: row!important
}
.flex-md-column {
	flex-direction: column!important
}
.flex-md-row-reverse {
	flex-direction: row-reverse!important
}
.flex-md-column-reverse {
	flex-direction: column-reverse!important
}
.flex-md-wrap {
	flex-wrap: wrap!important
}
.flex-md-nowrap {
	flex-wrap: nowrap!important
}
.flex-md-wrap-reverse {
	flex-wrap: wrap-reverse!important
}
.flex-md-fill {
	flex: 1 1 auto!important
}
.flex-md-grow-0 {
	flex-grow: 0!important
}
.flex-md-grow-1 {
	flex-grow: 1!important
}
.flex-md-shrink-0 {
	flex-shrink: 0!important
}
.flex-md-shrink-1 {
	flex-shrink: 1!important
}
.justify-content-md-start {
	justify-content: flex-start!important
}
.justify-content-md-end {
	justify-content: flex-end!important
}
.justify-content-md-center {
	justify-content: center!important
}
.justify-content-md-between {
	justify-content: space-between!important
}
.justify-content-md-around {
	justify-content: space-around!important
}
.align-items-md-start {
	align-items: flex-start!important
}
.align-items-md-end {
	align-items: flex-end!important
}
.align-items-md-center {
	align-items: center!important
}
.align-items-md-baseline {
	align-items: baseline!important
}
.align-items-md-stretch {
	align-items: stretch!important
}
.align-content-md-start {
	align-content: flex-start!important
}
.align-content-md-end {
	align-content: flex-end!important
}
.align-content-md-center {
	align-content: center!important
}
.align-content-md-between {
	align-content: space-between!important
}
.align-content-md-around {
	align-content: space-around!important
}
.align-content-md-stretch {
	align-content: stretch!important
}
.align-self-md-auto {
	align-self: auto!important
}
.align-self-md-start {
	align-self: flex-start!important
}
.align-self-md-end {
	align-self: flex-end!important
}
.align-self-md-center {
	align-self: center!important
}
.align-self-md-baseline {
	align-self: baseline!important
}
.align-self-md-stretch {
	align-self: stretch!important
}
}

@media (min-width:992px) {
.flex-lg-row {
	flex-direction: row!important
}
.flex-lg-column {
	flex-direction: column!important
}
.flex-lg-row-reverse {
	flex-direction: row-reverse!important
}
.flex-lg-column-reverse {
	flex-direction: column-reverse!important
}
.flex-lg-wrap {
	flex-wrap: wrap!important
}
.flex-lg-nowrap {
	flex-wrap: nowrap!important
}
.flex-lg-wrap-reverse {
	flex-wrap: wrap-reverse!important
}
.flex-lg-fill {
	flex: 1 1 auto!important
}
.flex-lg-grow-0 {
	flex-grow: 0!important
}
.flex-lg-grow-1 {
	flex-grow: 1!important
}
.flex-lg-shrink-0 {
	flex-shrink: 0!important
}
.flex-lg-shrink-1 {
	flex-shrink: 1!important
}
.justify-content-lg-start {
	justify-content: flex-start!important
}
.justify-content-lg-end {
	justify-content: flex-end!important
}
.justify-content-lg-center {
	justify-content: center!important
}
.justify-content-lg-between {
	justify-content: space-between!important
}
.justify-content-lg-around {
	justify-content: space-around!important
}
.align-items-lg-start {
	align-items: flex-start!important
}
.align-items-lg-end {
	align-items: flex-end!important
}
.align-items-lg-center {
	align-items: center!important
}
.align-items-lg-baseline {
	align-items: baseline!important
}
.align-items-lg-stretch {
	align-items: stretch!important
}
.align-content-lg-start {
	align-content: flex-start!important
}
.align-content-lg-end {
	align-content: flex-end!important
}
.align-content-lg-center {
	align-content: center!important
}
.align-content-lg-between {
	align-content: space-between!important
}
.align-content-lg-around {
	align-content: space-around!important
}
.align-content-lg-stretch {
	align-content: stretch!important
}
.align-self-lg-auto {
	align-self: auto!important
}
.align-self-lg-start {
	align-self: flex-start!important
}
.align-self-lg-end {
	align-self: flex-end!important
}
.align-self-lg-center {
	align-self: center!important
}
.align-self-lg-baseline {
	align-self: baseline!important
}
.align-self-lg-stretch {
	align-self: stretch!important
}
}

@media (min-width:1200px) {
.flex-xl-row {
	flex-direction: row!important
}
.flex-xl-column {
	flex-direction: column!important
}
.flex-xl-row-reverse {
	flex-direction: row-reverse!important
}
.flex-xl-column-reverse {
	flex-direction: column-reverse!important
}
.flex-xl-wrap {
	flex-wrap: wrap!important
}
.flex-xl-nowrap {
	flex-wrap: nowrap!important
}
.flex-xl-wrap-reverse {
	flex-wrap: wrap-reverse!important
}
.flex-xl-fill {
	flex: 1 1 auto!important
}
.flex-xl-grow-0 {
	flex-grow: 0!important
}
.flex-xl-grow-1 {
	flex-grow: 1!important
}
.flex-xl-shrink-0 {
	flex-shrink: 0!important
}
.flex-xl-shrink-1 {
	flex-shrink: 1!important
}
.justify-content-xl-start {
	justify-content: flex-start!important
}
.justify-content-xl-end {
	justify-content: flex-end!important
}
.justify-content-xl-center {
	justify-content: center!important
}
.justify-content-xl-between {
	justify-content: space-between!important
}
.justify-content-xl-around {
	justify-content: space-around!important
}
.align-items-xl-start {
	align-items: flex-start!important
}
.align-items-xl-end {
	align-items: flex-end!important
}
.align-items-xl-center {
	align-items: center!important
}
.align-items-xl-baseline {
	align-items: baseline!important
}
.align-items-xl-stretch {
	align-items: stretch!important
}
.align-content-xl-start {
	align-content: flex-start!important
}
.align-content-xl-end {
	align-content: flex-end!important
}
.align-content-xl-center {
	align-content: center!important
}
.align-content-xl-between {
	align-content: space-between!important
}
.align-content-xl-around {
	align-content: space-around!important
}
.align-content-xl-stretch {
	align-content: stretch!important
}
.align-self-xl-auto {
	align-self: auto!important
}
.align-self-xl-start {
	align-self: flex-start!important
}
.align-self-xl-end {
	align-self: flex-end!important
}
.align-self-xl-center {
	align-self: center!important
}
.align-self-xl-baseline {
	align-self: baseline!important
}
.align-self-xl-stretch {
	align-self: stretch!important
}
}
.float-left {
	float: left!important
}
.float-right {
	float: right!important
}
.float-none {
	float: none!important
}

@media (min-width:576px) {
.float-sm-left {
	float: left!important
}
.float-sm-right {
	float: right!important
}
.float-sm-none {
	float: none!important
}
}

@media (min-width:768px) {
.float-md-left {
	float: left!important
}
.float-md-right {
	float: right!important
}
.float-md-none {
	float: none!important
}
}

@media (min-width:992px) {
.float-lg-left {
	float: left!important
}
.float-lg-right {
	float: right!important
}
.float-lg-none {
	float: none!important
}
}

@media (min-width:1200px) {
.float-xl-left {
	float: left!important
}
.float-xl-right {
	float: right!important
}
.float-xl-none {
	float: none!important
}
}
.user-select-all {
	-webkit-user-select: all!important;
	-moz-user-select: all!important;
	-ms-user-select: all!important;
	user-select: all!important
}
.user-select-auto {
	-webkit-user-select: auto!important;
	-moz-user-select: auto!important;
	-ms-user-select: auto!important;
	user-select: auto!important
}
.user-select-none {
	-webkit-user-select: none!important;
	-moz-user-select: none!important;
	-ms-user-select: none!important;
	user-select: none!important
}
.overflow-auto {
	overflow: auto!important
}
.overflow-hidden {
	overflow: hidden!important
}
.position-static {
	position: static!important
}
.position-relative {
	position: relative!important
}
.position-absolute {
	position: absolute!important
}
.position-fixed {
	position: fixed!important
}
.position-sticky {
	position: -webkit-sticky!important;
	position: sticky!important
}
.fixed-top {
	top: 0
}
.fixed-bottom, .fixed-top {
	position: fixed;
	right: 0;
	left: 0;
	z-index: 1030
}
.fixed-bottom {
	bottom: 0
}
@supports ((position:-webkit-sticky) or (position:sticky)) {
.sticky-top {
position:-webkit-sticky;
position:sticky;
top:0;
z-index:1020
}
}
.sr-only {
	position: absolute;
	width: 1px;
	height: 1px;
	padding: 0;
	margin: -1px;
	overflow: hidden;
	clip: rect(0,0,0,0);
	white-space: nowrap;
	border: 0
}
.sr-only-focusable:active, .sr-only-focusable:focus {
	position: static;
	width: auto;
	height: auto;
	overflow: visible;
	clip: auto;
	white-space: normal
}
.shadow-sm {
	box-shadow: 0 .125rem .25rem rgba(20,20,31,.075)!important
}
.shadow {
	box-shadow: 0 .5rem 1rem rgba(20,20,31,.15)!important
}
.shadow-lg {
	box-shadow: 0 1rem 3rem rgba(20,20,31,.175)!important
}
.shadow-none {
	box-shadow: none!important
}
.w-25 {
	width: 25%!important
}
.w-50 {
	width: 50%!important
}
.w-75 {
	width: 75%!important
}
.w-100 {
	width: 100%!important
}
.w-auto {
	width: auto!important
}
.w-125 {
	width: 125%!important
}
.w-150 {
	width: 150%!important
}
.w-175 {
	width: 175%!important
}
.w-200 {
	width: 200%!important
}
.h-25 {
	height: 25%!important
}
.h-50 {
	height: 50%!important
}
.h-75 {
	height: 75%!important
}
.h-100 {
	height: 100%!important
}
.h-auto {
	height: auto!important
}
.h-125 {
	height: 125%!important
}
.h-150 {
	height: 150%!important
}
.h-175 {
	height: 175%!important
}
.h-200 {
	height: 200%!important
}
.mw-100 {
	max-width: 100%!important
}
.mh-100 {
	max-height: 100%!important
}
.min-vw-100 {
	min-width: 100vw!important
}
.min-vh-100 {
	min-height: 100vh!important
}
.vw-100 {
	width: 100vw!important
}
.vh-100 {
	height: 100vh!important
}
.m-0 {
	margin: 0!important
}
.mt-0, .my-0 {
	margin-top: 0!important
}
.mr-0, .mx-0 {
	margin-right: 0!important
}
.mb-0, .my-0 {
	margin-bottom: 0!important
}
.ml-0, .mx-0 {
	margin-left: 0!important
}
.m-1 {
	margin: .25rem!important
}
.mt-1, .my-1 {
	margin-top: .25rem!important
}
.mr-1, .mx-1 {
	margin-right: .25rem!important
}
.mb-1, .my-1 {
	margin-bottom: .25rem!important
}
.ml-1, .mx-1 {
	margin-left: .25rem!important
}
.m-2 {
	margin: .5rem!important
}
.mt-2, .my-2 {
	margin-top: .5rem!important
}
.mr-2, .mx-2 {
	margin-right: .5rem!important
}
.mb-2, .my-2 {
	margin-bottom: .5rem!important
}
.ml-2, .mx-2 {
	margin-left: .5rem!important
}
.m-3 {
	margin: 1rem!important
}
.mt-3, .my-3 {
	margin-top: 1rem!important
}
.mr-3, .mx-3 {
	margin-right: 1rem!important
}
.mb-3, .my-3 {
	margin-bottom: 1rem!important
}
.ml-3, .mx-3 {
	margin-left: 1rem!important
}
.m-4 {
	margin: 1.5rem!important
}
.mt-4, .my-4 {
	margin-top: 1.5rem!important
}
.mr-4, .mx-4 {
	margin-right: 1.5rem!important
}
.mb-4, .my-4 {
	margin-bottom: 1.5rem!important
}
.ml-4, .mx-4 {
	margin-left: 1.5rem!important
}
.m-5 {
	margin: 3rem!important
}
.mt-5, .my-5 {
	margin-top: 3rem!important
}
.mr-5, .mx-5 {
	margin-right: 3rem!important
}
.mb-5, .my-5 {
	margin-bottom: 3rem!important
}
.ml-5, .mx-5 {
	margin-left: 3rem!important
}
.m-6 {
	margin: 6rem!important
}
.mt-6, .my-6 {
	margin-top: 6rem!important
}
.mr-6, .mx-6 {
	margin-right: 6rem!important
}
.mb-6, .my-6 {
	margin-bottom: 6rem!important
}
.ml-6, .mx-6 {
	margin-left: 6rem!important
}
.p-0 {
	padding: 0!important
}
.pt-0, .py-0 {
	padding-top: 0!important
}
.pr-0, .px-0 {
	padding-right: 0!important
}
.pb-0, .py-0 {
	padding-bottom: 0!important
}
.pl-0, .px-0 {
	padding-left: 0!important
}
.p-1 {
	padding: .25rem!important
}
.pt-1, .py-1 {
	padding-top: .25rem!important
}
.pr-1, .px-1 {
	padding-right: .25rem!important
}
.pb-1, .py-1 {
	padding-bottom: .25rem!important
}
.pl-1, .px-1 {
	padding-left: .25rem!important
}
.p-2 {
	padding: .5rem!important
}
.pt-2, .py-2 {
	padding-top: .5rem!important
}
.pr-2, .px-2 {
	padding-right: .5rem!important
}
.pb-2, .py-2 {
	padding-bottom: .5rem!important
}
.pl-2, .px-2 {
	padding-left: .5rem!important
}
.p-3 {
	padding: 1rem!important
}
.pt-3, .py-3 {
	padding-top: 1rem!important
}
.pr-3, .px-3 {
	padding-right: 1rem!important
}
.pb-3, .py-3 {
	padding-bottom: 1rem!important
}
.pl-3, .px-3 {
	padding-left: 1rem!important
}
.p-4 {
	padding: 1.5rem!important
}
.pt-4, .py-4 {
	padding-top: 1.5rem!important
}
.pr-4, .px-4 {
	padding-right: 1.5rem!important
}
.pb-4, .py-4 {
	padding-bottom: 1.5rem!important
}
.pl-4, .px-4 {
	padding-left: 1.5rem!important
}
.p-5 {
	padding: 3rem!important
}
.pt-5, .py-5 {
	padding-top: 3rem!important
}
.pr-5, .px-5 {
	padding-right: 3rem!important
}
.pb-5, .py-5 {
	padding-bottom: 3rem!important
}
.pl-5, .px-5 {
	padding-left: 3rem!important
}
.p-6 {
	padding: 6rem!important
}
.pt-6, .py-6 {
	padding-top: 6rem!important
}
.pr-6, .px-6 {
	padding-right: 6rem!important
}
.pb-6, .py-6 {
	padding-bottom: 6rem!important
}
.pl-6, .px-6 {
	padding-left: 6rem!important
}
.m-n1 {
	margin: -.25rem!important
}
.mt-n1, .my-n1 {
	margin-top: -.25rem!important
}
.mr-n1, .mx-n1 {
	margin-right: -.25rem!important
}
.mb-n1, .my-n1 {
	margin-bottom: -.25rem!important
}
.ml-n1, .mx-n1 {
	margin-left: -.25rem!important
}
.m-n2 {
	margin: -.5rem!important
}
.mt-n2, .my-n2 {
	margin-top: -.5rem!important
}
.mr-n2, .mx-n2 {
	margin-right: -.5rem!important
}
.mb-n2, .my-n2 {
	margin-bottom: -.5rem!important
}
.ml-n2, .mx-n2 {
	margin-left: -.5rem!important
}
.m-n3 {
	margin: -1rem!important
}
.mt-n3, .my-n3 {
	margin-top: -1rem!important
}
.mr-n3, .mx-n3 {
	margin-right: -1rem!important
}
.mb-n3, .my-n3 {
	margin-bottom: -1rem!important
}
.ml-n3, .mx-n3 {
	margin-left: -1rem!important
}
.m-n4 {
	margin: -1.5rem!important
}
.mt-n4, .my-n4 {
	margin-top: -1.5rem!important
}
.mr-n4, .mx-n4 {
	margin-right: -1.5rem!important
}
.mb-n4, .my-n4 {
	margin-bottom: -1.5rem!important
}
.ml-n4, .mx-n4 {
	margin-left: -1.5rem!important
}
.m-n5 {
	margin: -3rem!important
}
.mt-n5, .my-n5 {
	margin-top: -3rem!important
}
.mr-n5, .mx-n5 {
	margin-right: -3rem!important
}
.mb-n5, .my-n5 {
	margin-bottom: -3rem!important
}
.ml-n5, .mx-n5 {
	margin-left: -3rem!important
}
.m-n6 {
	margin: -6rem!important
}
.mt-n6, .my-n6 {
	margin-top: -6rem!important
}
.mr-n6, .mx-n6 {
	margin-right: -6rem!important
}
.mb-n6, .my-n6 {
	margin-bottom: -6rem!important
}
.ml-n6, .mx-n6 {
	margin-left: -6rem!important
}
.m-auto {
	margin: auto!important
}
.mt-auto, .my-auto {
	margin-top: auto!important
}
.mr-auto, .mx-auto {
	margin-right: auto!important
}
.mb-auto, .my-auto {
	margin-bottom: auto!important
}
.ml-auto, .mx-auto {
	margin-left: auto!important
}

@media (min-width:576px) {
.m-sm-0 {
	margin: 0!important
}
.mt-sm-0, .my-sm-0 {
	margin-top: 0!important
}
.mr-sm-0, .mx-sm-0 {
	margin-right: 0!important
}
.mb-sm-0, .my-sm-0 {
	margin-bottom: 0!important
}
.ml-sm-0, .mx-sm-0 {
	margin-left: 0!important
}
.m-sm-1 {
	margin: .25rem!important
}
.mt-sm-1, .my-sm-1 {
	margin-top: .25rem!important
}
.mr-sm-1, .mx-sm-1 {
	margin-right: .25rem!important
}
.mb-sm-1, .my-sm-1 {
	margin-bottom: .25rem!important
}
.ml-sm-1, .mx-sm-1 {
	margin-left: .25rem!important
}
.m-sm-2 {
	margin: .5rem!important
}
.mt-sm-2, .my-sm-2 {
	margin-top: .5rem!important
}
.mr-sm-2, .mx-sm-2 {
	margin-right: .5rem!important
}
.mb-sm-2, .my-sm-2 {
	margin-bottom: .5rem!important
}
.ml-sm-2, .mx-sm-2 {
	margin-left: .5rem!important
}
.m-sm-3 {
	margin: 1rem!important
}
.mt-sm-3, .my-sm-3 {
	margin-top: 1rem!important
}
.mr-sm-3, .mx-sm-3 {
	margin-right: 1rem!important
}
.mb-sm-3, .my-sm-3 {
	margin-bottom: 1rem!important
}
.ml-sm-3, .mx-sm-3 {
	margin-left: 1rem!important
}
.m-sm-4 {
	margin: 1.5rem!important
}
.mt-sm-4, .my-sm-4 {
	margin-top: 1.5rem!important
}
.mr-sm-4, .mx-sm-4 {
	margin-right: 1.5rem!important
}
.mb-sm-4, .my-sm-4 {
	margin-bottom: 1.5rem!important
}
.ml-sm-4, .mx-sm-4 {
	margin-left: 1.5rem!important
}
.m-sm-5 {
	margin: 3rem!important
}
.mt-sm-5, .my-sm-5 {
	margin-top: 3rem!important
}
.mr-sm-5, .mx-sm-5 {
	margin-right: 3rem!important
}
.mb-sm-5, .my-sm-5 {
	margin-bottom: 3rem!important
}
.ml-sm-5, .mx-sm-5 {
	margin-left: 3rem!important
}
.m-sm-6 {
	margin: 6rem!important
}
.mt-sm-6, .my-sm-6 {
	margin-top: 6rem!important
}
.mr-sm-6, .mx-sm-6 {
	margin-right: 6rem!important
}
.mb-sm-6, .my-sm-6 {
	margin-bottom: 6rem!important
}
.ml-sm-6, .mx-sm-6 {
	margin-left: 6rem!important
}
.p-sm-0 {
	padding: 0!important
}
.pt-sm-0, .py-sm-0 {
	padding-top: 0!important
}
.pr-sm-0, .px-sm-0 {
	padding-right: 0!important
}
.pb-sm-0, .py-sm-0 {
	padding-bottom: 0!important
}
.pl-sm-0, .px-sm-0 {
	padding-left: 0!important
}
.p-sm-1 {
	padding: .25rem!important
}
.pt-sm-1, .py-sm-1 {
	padding-top: .25rem!important
}
.pr-sm-1, .px-sm-1 {
	padding-right: .25rem!important
}
.pb-sm-1, .py-sm-1 {
	padding-bottom: .25rem!important
}
.pl-sm-1, .px-sm-1 {
	padding-left: .25rem!important
}
.p-sm-2 {
	padding: .5rem!important
}
.pt-sm-2, .py-sm-2 {
	padding-top: .5rem!important
}
.pr-sm-2, .px-sm-2 {
	padding-right: .5rem!important
}
.pb-sm-2, .py-sm-2 {
	padding-bottom: .5rem!important
}
.pl-sm-2, .px-sm-2 {
	padding-left: .5rem!important
}
.p-sm-3 {
	padding: 1rem!important
}
.pt-sm-3, .py-sm-3 {
	padding-top: 1rem!important
}
.pr-sm-3, .px-sm-3 {
	padding-right: 1rem!important
}
.pb-sm-3, .py-sm-3 {
	padding-bottom: 1rem!important
}
.pl-sm-3, .px-sm-3 {
	padding-left: 1rem!important
}
.p-sm-4 {
	padding: 1.5rem!important
}
.pt-sm-4, .py-sm-4 {
	padding-top: 1.5rem!important
}
.pr-sm-4, .px-sm-4 {
	padding-right: 1.5rem!important
}
.pb-sm-4, .py-sm-4 {
	padding-bottom: 1.5rem!important
}
.pl-sm-4, .px-sm-4 {
	padding-left: 1.5rem!important
}
.p-sm-5 {
	padding: 3rem!important
}
.pt-sm-5, .py-sm-5 {
	padding-top: 3rem!important
}
.pr-sm-5, .px-sm-5 {
	padding-right: 3rem!important
}
.pb-sm-5, .py-sm-5 {
	padding-bottom: 3rem!important
}
.pl-sm-5, .px-sm-5 {
	padding-left: 3rem!important
}
.p-sm-6 {
	padding: 6rem!important
}
.pt-sm-6, .py-sm-6 {
	padding-top: 6rem!important
}
.pr-sm-6, .px-sm-6 {
	padding-right: 6rem!important
}
.pb-sm-6, .py-sm-6 {
	padding-bottom: 6rem!important
}
.pl-sm-6, .px-sm-6 {
	padding-left: 6rem!important
}
.m-sm-n1 {
	margin: -.25rem!important
}
.mt-sm-n1, .my-sm-n1 {
	margin-top: -.25rem!important
}
.mr-sm-n1, .mx-sm-n1 {
	margin-right: -.25rem!important
}
.mb-sm-n1, .my-sm-n1 {
	margin-bottom: -.25rem!important
}
.ml-sm-n1, .mx-sm-n1 {
	margin-left: -.25rem!important
}
.m-sm-n2 {
	margin: -.5rem!important
}
.mt-sm-n2, .my-sm-n2 {
	margin-top: -.5rem!important
}
.mr-sm-n2, .mx-sm-n2 {
	margin-right: -.5rem!important
}
.mb-sm-n2, .my-sm-n2 {
	margin-bottom: -.5rem!important
}
.ml-sm-n2, .mx-sm-n2 {
	margin-left: -.5rem!important
}
.m-sm-n3 {
	margin: -1rem!important
}
.mt-sm-n3, .my-sm-n3 {
	margin-top: -1rem!important
}
.mr-sm-n3, .mx-sm-n3 {
	margin-right: -1rem!important
}
.mb-sm-n3, .my-sm-n3 {
	margin-bottom: -1rem!important
}
.ml-sm-n3, .mx-sm-n3 {
	margin-left: -1rem!important
}
.m-sm-n4 {
	margin: -1.5rem!important
}
.mt-sm-n4, .my-sm-n4 {
	margin-top: -1.5rem!important
}
.mr-sm-n4, .mx-sm-n4 {
	margin-right: -1.5rem!important
}
.mb-sm-n4, .my-sm-n4 {
	margin-bottom: -1.5rem!important
}
.ml-sm-n4, .mx-sm-n4 {
	margin-left: -1.5rem!important
}
.m-sm-n5 {
	margin: -3rem!important
}
.mt-sm-n5, .my-sm-n5 {
	margin-top: -3rem!important
}
.mr-sm-n5, .mx-sm-n5 {
	margin-right: -3rem!important
}
.mb-sm-n5, .my-sm-n5 {
	margin-bottom: -3rem!important
}
.ml-sm-n5, .mx-sm-n5 {
	margin-left: -3rem!important
}
.m-sm-n6 {
	margin: -6rem!important
}
.mt-sm-n6, .my-sm-n6 {
	margin-top: -6rem!important
}
.mr-sm-n6, .mx-sm-n6 {
	margin-right: -6rem!important
}
.mb-sm-n6, .my-sm-n6 {
	margin-bottom: -6rem!important
}
.ml-sm-n6, .mx-sm-n6 {
	margin-left: -6rem!important
}
.m-sm-auto {
	margin: auto!important
}
.mt-sm-auto, .my-sm-auto {
	margin-top: auto!important
}
.mr-sm-auto, .mx-sm-auto {
	margin-right: auto!important
}
.mb-sm-auto, .my-sm-auto {
	margin-bottom: auto!important
}
.ml-sm-auto, .mx-sm-auto {
	margin-left: auto!important
}
}

@media (min-width:768px) {
.m-md-0 {
	margin: 0!important
}
.mt-md-0, .my-md-0 {
	margin-top: 0!important
}
.mr-md-0, .mx-md-0 {
	margin-right: 0!important
}
.mb-md-0, .my-md-0 {
	margin-bottom: 0!important
}
.ml-md-0, .mx-md-0 {
	margin-left: 0!important
}
.m-md-1 {
	margin: .25rem!important
}
.mt-md-1, .my-md-1 {
	margin-top: .25rem!important
}
.mr-md-1, .mx-md-1 {
	margin-right: .25rem!important
}
.mb-md-1, .my-md-1 {
	margin-bottom: .25rem!important
}
.ml-md-1, .mx-md-1 {
	margin-left: .25rem!important
}
.m-md-2 {
	margin: .5rem!important
}
.mt-md-2, .my-md-2 {
	margin-top: .5rem!important
}
.mr-md-2, .mx-md-2 {
	margin-right: .5rem!important
}
.mb-md-2, .my-md-2 {
	margin-bottom: .5rem!important
}
.ml-md-2, .mx-md-2 {
	margin-left: .5rem!important
}
.m-md-3 {
	margin: 1rem!important
}
.mt-md-3, .my-md-3 {
	margin-top: 1rem!important
}
.mr-md-3, .mx-md-3 {
	margin-right: 1rem!important
}
.mb-md-3, .my-md-3 {
	margin-bottom: 1rem!important
}
.ml-md-3, .mx-md-3 {
	margin-left: 1rem!important
}
.m-md-4 {
	margin: 1.5rem!important
}
.mt-md-4, .my-md-4 {
	margin-top: 1.5rem!important
}
.mr-md-4, .mx-md-4 {
	margin-right: 1.5rem!important
}
.mb-md-4, .my-md-4 {
	margin-bottom: 1.5rem!important
}
.ml-md-4, .mx-md-4 {
	margin-left: 1.5rem!important
}
.m-md-5 {
	margin: 3rem!important
}
.mt-md-5, .my-md-5 {
	margin-top: 3rem!important
}
.mr-md-5, .mx-md-5 {
	margin-right: 3rem!important
}
.mb-md-5, .my-md-5 {
	margin-bottom: 3rem!important
}
.ml-md-5, .mx-md-5 {
	margin-left: 3rem!important
}
.m-md-6 {
	margin: 6rem!important
}
.mt-md-6, .my-md-6 {
	margin-top: 6rem!important
}
.mr-md-6, .mx-md-6 {
	margin-right: 6rem!important
}
.mb-md-6, .my-md-6 {
	margin-bottom: 6rem!important
}
.ml-md-6, .mx-md-6 {
	margin-left: 6rem!important
}
.p-md-0 {
	padding: 0!important
}
.pt-md-0, .py-md-0 {
	padding-top: 0!important
}
.pr-md-0, .px-md-0 {
	padding-right: 0!important
}
.pb-md-0, .py-md-0 {
	padding-bottom: 0!important
}
.pl-md-0, .px-md-0 {
	padding-left: 0!important
}
.p-md-1 {
	padding: .25rem!important
}
.pt-md-1, .py-md-1 {
	padding-top: .25rem!important
}
.pr-md-1, .px-md-1 {
	padding-right: .25rem!important
}
.pb-md-1, .py-md-1 {
	padding-bottom: .25rem!important
}
.pl-md-1, .px-md-1 {
	padding-left: .25rem!important
}
.p-md-2 {
	padding: .5rem!important
}
.pt-md-2, .py-md-2 {
	padding-top: .5rem!important
}
.pr-md-2, .px-md-2 {
	padding-right: .5rem!important
}
.pb-md-2, .py-md-2 {
	padding-bottom: .5rem!important
}
.pl-md-2, .px-md-2 {
	padding-left: .5rem!important
}
.p-md-3 {
	padding: 1rem!important
}
.pt-md-3, .py-md-3 {
	padding-top: 1rem!important
}
.pr-md-3, .px-md-3 {
	padding-right: 1rem!important
}
.pb-md-3, .py-md-3 {
	padding-bottom: 1rem!important
}
.pl-md-3, .px-md-3 {
	padding-left: 1rem!important
}
.p-md-4 {
	padding: 1.5rem!important
}
.pt-md-4, .py-md-4 {
	padding-top: 1.5rem!important
}
.pr-md-4, .px-md-4 {
	padding-right: 1.5rem!important
}
.pb-md-4, .py-md-4 {
	padding-bottom: 1.5rem!important
}
.pl-md-4, .px-md-4 {
	padding-left: 1.5rem!important
}
.p-md-5 {
	padding: 3rem!important
}
.pt-md-5, .py-md-5 {
	padding-top: 3rem!important
}
.pr-md-5, .px-md-5 {
	padding-right: 3rem!important
}
.pb-md-5, .py-md-5 {
	padding-bottom: 3rem!important
}
.pl-md-5, .px-md-5 {
	padding-left: 3rem!important
}
.p-md-6 {
	padding: 6rem!important
}
.pt-md-6, .py-md-6 {
	padding-top: 6rem!important
}
.pr-md-6, .px-md-6 {
	padding-right: 6rem!important
}
.pb-md-6, .py-md-6 {
	padding-bottom: 6rem!important
}
.pl-md-6, .px-md-6 {
	padding-left: 6rem!important
}
.m-md-n1 {
	margin: -.25rem!important
}
.mt-md-n1, .my-md-n1 {
	margin-top: -.25rem!important
}
.mr-md-n1, .mx-md-n1 {
	margin-right: -.25rem!important
}
.mb-md-n1, .my-md-n1 {
	margin-bottom: -.25rem!important
}
.ml-md-n1, .mx-md-n1 {
	margin-left: -.25rem!important
}
.m-md-n2 {
	margin: -.5rem!important
}
.mt-md-n2, .my-md-n2 {
	margin-top: -.5rem!important
}
.mr-md-n2, .mx-md-n2 {
	margin-right: -.5rem!important
}
.mb-md-n2, .my-md-n2 {
	margin-bottom: -.5rem!important
}
.ml-md-n2, .mx-md-n2 {
	margin-left: -.5rem!important
}
.m-md-n3 {
	margin: -1rem!important
}
.mt-md-n3, .my-md-n3 {
	margin-top: -1rem!important
}
.mr-md-n3, .mx-md-n3 {
	margin-right: -1rem!important
}
.mb-md-n3, .my-md-n3 {
	margin-bottom: -1rem!important
}
.ml-md-n3, .mx-md-n3 {
	margin-left: -1rem!important
}
.m-md-n4 {
	margin: -1.5rem!important
}
.mt-md-n4, .my-md-n4 {
	margin-top: -1.5rem!important
}
.mr-md-n4, .mx-md-n4 {
	margin-right: -1.5rem!important
}
.mb-md-n4, .my-md-n4 {
	margin-bottom: -1.5rem!important
}
.ml-md-n4, .mx-md-n4 {
	margin-left: -1.5rem!important
}
.m-md-n5 {
	margin: -3rem!important
}
.mt-md-n5, .my-md-n5 {
	margin-top: -3rem!important
}
.mr-md-n5, .mx-md-n5 {
	margin-right: -3rem!important
}
.mb-md-n5, .my-md-n5 {
	margin-bottom: -3rem!important
}
.ml-md-n5, .mx-md-n5 {
	margin-left: -3rem!important
}
.m-md-n6 {
	margin: -6rem!important
}
.mt-md-n6, .my-md-n6 {
	margin-top: -6rem!important
}
.mr-md-n6, .mx-md-n6 {
	margin-right: -6rem!important
}
.mb-md-n6, .my-md-n6 {
	margin-bottom: -6rem!important
}
.ml-md-n6, .mx-md-n6 {
	margin-left: -6rem!important
}
.m-md-auto {
	margin: auto!important
}
.mt-md-auto, .my-md-auto {
	margin-top: auto!important
}
.mr-md-auto, .mx-md-auto {
	margin-right: auto!important
}
.mb-md-auto, .my-md-auto {
	margin-bottom: auto!important
}
.ml-md-auto, .mx-md-auto {
	margin-left: auto!important
}
}

@media (min-width:992px) {
.m-lg-0 {
	margin: 0!important
}
.mt-lg-0, .my-lg-0 {
	margin-top: 0!important
}
.mr-lg-0, .mx-lg-0 {
	margin-right: 0!important
}
.mb-lg-0, .my-lg-0 {
	margin-bottom: 0!important
}
.ml-lg-0, .mx-lg-0 {
	margin-left: 0!important
}
.m-lg-1 {
	margin: .25rem!important
}
.mt-lg-1, .my-lg-1 {
	margin-top: .25rem!important
}
.mr-lg-1, .mx-lg-1 {
	margin-right: .25rem!important
}
.mb-lg-1, .my-lg-1 {
	margin-bottom: .25rem!important
}
.ml-lg-1, .mx-lg-1 {
	margin-left: .25rem!important
}
.m-lg-2 {
	margin: .5rem!important
}
.mt-lg-2, .my-lg-2 {
	margin-top: .5rem!important
}
.mr-lg-2, .mx-lg-2 {
	margin-right: .5rem!important
}
.mb-lg-2, .my-lg-2 {
	margin-bottom: .5rem!important
}
.ml-lg-2, .mx-lg-2 {
	margin-left: .5rem!important
}
.m-lg-3 {
	margin: 1rem!important
}
.mt-lg-3, .my-lg-3 {
	margin-top: 1rem!important
}
.mr-lg-3, .mx-lg-3 {
	margin-right: 1rem!important
}
.mb-lg-3, .my-lg-3 {
	margin-bottom: 1rem!important
}
.ml-lg-3, .mx-lg-3 {
	margin-left: 1rem!important
}
.m-lg-4 {
	margin: 1.5rem!important
}
.mt-lg-4, .my-lg-4 {
	margin-top: 1.5rem!important
}
.mr-lg-4, .mx-lg-4 {
	margin-right: 1.5rem!important
}
.mb-lg-4, .my-lg-4 {
	margin-bottom: 1.5rem!important
}
.ml-lg-4, .mx-lg-4 {
	margin-left: 1.5rem!important
}
.m-lg-5 {
	margin: 3rem!important
}
.mt-lg-5, .my-lg-5 {
	margin-top: 3rem!important
}
.mr-lg-5, .mx-lg-5 {
	margin-right: 3rem!important
}
.mb-lg-5, .my-lg-5 {
	margin-bottom: 3rem!important
}
.ml-lg-5, .mx-lg-5 {
	margin-left: 3rem!important
}
.m-lg-6 {
	margin: 6rem!important
}
.mt-lg-6, .my-lg-6 {
	margin-top: 6rem!important
}
.mr-lg-6, .mx-lg-6 {
	margin-right: 6rem!important
}
.mb-lg-6, .my-lg-6 {
	margin-bottom: 6rem!important
}
.ml-lg-6, .mx-lg-6 {
	margin-left: 6rem!important
}
.p-lg-0 {
	padding: 0!important
}
.pt-lg-0, .py-lg-0 {
	padding-top: 0!important
}
.pr-lg-0, .px-lg-0 {
	padding-right: 0!important
}
.pb-lg-0, .py-lg-0 {
	padding-bottom: 0!important
}
.pl-lg-0, .px-lg-0 {
	padding-left: 0!important
}
.p-lg-1 {
	padding: .25rem!important
}
.pt-lg-1, .py-lg-1 {
	padding-top: .25rem!important
}
.pr-lg-1, .px-lg-1 {
	padding-right: .25rem!important
}
.pb-lg-1, .py-lg-1 {
	padding-bottom: .25rem!important
}
.pl-lg-1, .px-lg-1 {
	padding-left: .25rem!important
}
.p-lg-2 {
	padding: .5rem!important
}
.pt-lg-2, .py-lg-2 {
	padding-top: .5rem!important
}
.pr-lg-2, .px-lg-2 {
	padding-right: .5rem!important
}
.pb-lg-2, .py-lg-2 {
	padding-bottom: .5rem!important
}
.pl-lg-2, .px-lg-2 {
	padding-left: .5rem!important
}
.p-lg-3 {
	padding: 1rem!important
}
.pt-lg-3, .py-lg-3 {
	padding-top: 1rem!important
}
.pr-lg-3, .px-lg-3 {
	padding-right: 1rem!important
}
.pb-lg-3, .py-lg-3 {
	padding-bottom: 1rem!important
}
.pl-lg-3, .px-lg-3 {
	padding-left: 1rem!important
}
.p-lg-4 {
	padding: 1.5rem!important
}
.pt-lg-4, .py-lg-4 {
	padding-top: 1.5rem!important
}
.pr-lg-4, .px-lg-4 {
	padding-right: 1.5rem!important
}
.pb-lg-4, .py-lg-4 {
	padding-bottom: 1.5rem!important
}
.pl-lg-4, .px-lg-4 {
	padding-left: 1.5rem!important
}
.p-lg-5 {
	padding: 3rem!important
}
.pt-lg-5, .py-lg-5 {
	padding-top: 3rem!important
}
.pr-lg-5, .px-lg-5 {
	padding-right: 3rem!important
}
.pb-lg-5, .py-lg-5 {
	padding-bottom: 3rem!important
}
.pl-lg-5, .px-lg-5 {
	padding-left: 3rem!important
}
.p-lg-6 {
	padding: 6rem!important
}
.pt-lg-6, .py-lg-6 {
	padding-top: 6rem!important
}
.pr-lg-6, .px-lg-6 {
	padding-right: 6rem!important
}
.pb-lg-6, .py-lg-6 {
	padding-bottom: 6rem!important
}
.pl-lg-6, .px-lg-6 {
	padding-left: 6rem!important
}
.m-lg-n1 {
	margin: -.25rem!important
}
.mt-lg-n1, .my-lg-n1 {
	margin-top: -.25rem!important
}
.mr-lg-n1, .mx-lg-n1 {
	margin-right: -.25rem!important
}
.mb-lg-n1, .my-lg-n1 {
	margin-bottom: -.25rem!important
}
.ml-lg-n1, .mx-lg-n1 {
	margin-left: -.25rem!important
}
.m-lg-n2 {
	margin: -.5rem!important
}
.mt-lg-n2, .my-lg-n2 {
	margin-top: -.5rem!important
}
.mr-lg-n2, .mx-lg-n2 {
	margin-right: -.5rem!important
}
.mb-lg-n2, .my-lg-n2 {
	margin-bottom: -.5rem!important
}
.ml-lg-n2, .mx-lg-n2 {
	margin-left: -.5rem!important
}
.m-lg-n3 {
	margin: -1rem!important
}
.mt-lg-n3, .my-lg-n3 {
	margin-top: -1rem!important
}
.mr-lg-n3, .mx-lg-n3 {
	margin-right: -1rem!important
}
.mb-lg-n3, .my-lg-n3 {
	margin-bottom: -1rem!important
}
.ml-lg-n3, .mx-lg-n3 {
	margin-left: -1rem!important
}
.m-lg-n4 {
	margin: -1.5rem!important
}
.mt-lg-n4, .my-lg-n4 {
	margin-top: -1.5rem!important
}
.mr-lg-n4, .mx-lg-n4 {
	margin-right: -1.5rem!important
}
.mb-lg-n4, .my-lg-n4 {
	margin-bottom: -1.5rem!important
}
.ml-lg-n4, .mx-lg-n4 {
	margin-left: -1.5rem!important
}
.m-lg-n5 {
	margin: -3rem!important
}
.mt-lg-n5, .my-lg-n5 {
	margin-top: -3rem!important
}
.mr-lg-n5, .mx-lg-n5 {
	margin-right: -3rem!important
}
.mb-lg-n5, .my-lg-n5 {
	margin-bottom: -3rem!important
}
.ml-lg-n5, .mx-lg-n5 {
	margin-left: -3rem!important
}
.m-lg-n6 {
	margin: -6rem!important
}
.mt-lg-n6, .my-lg-n6 {
	margin-top: -6rem!important
}
.mr-lg-n6, .mx-lg-n6 {
	margin-right: -6rem!important
}
.mb-lg-n6, .my-lg-n6 {
	margin-bottom: -6rem!important
}
.ml-lg-n6, .mx-lg-n6 {
	margin-left: -6rem!important
}
.m-lg-auto {
	margin: auto!important
}
.mt-lg-auto, .my-lg-auto {
	margin-top: auto!important
}
.mr-lg-auto, .mx-lg-auto {
	margin-right: auto!important
}
.mb-lg-auto, .my-lg-auto {
	margin-bottom: auto!important
}
.ml-lg-auto, .mx-lg-auto {
	margin-left: auto!important
}
}

@media (min-width:1200px) {
.m-xl-0 {
	margin: 0!important
}
.mt-xl-0, .my-xl-0 {
	margin-top: 0!important
}
.mr-xl-0, .mx-xl-0 {
	margin-right: 0!important
}
.mb-xl-0, .my-xl-0 {
	margin-bottom: 0!important
}
.ml-xl-0, .mx-xl-0 {
	margin-left: 0!important
}
.m-xl-1 {
	margin: .25rem!important
}
.mt-xl-1, .my-xl-1 {
	margin-top: .25rem!important
}
.mr-xl-1, .mx-xl-1 {
	margin-right: .25rem!important
}
.mb-xl-1, .my-xl-1 {
	margin-bottom: .25rem!important
}
.ml-xl-1, .mx-xl-1 {
	margin-left: .25rem!important
}
.m-xl-2 {
	margin: .5rem!important
}
.mt-xl-2, .my-xl-2 {
	margin-top: .5rem!important
}
.mr-xl-2, .mx-xl-2 {
	margin-right: .5rem!important
}
.mb-xl-2, .my-xl-2 {
	margin-bottom: .5rem!important
}
.ml-xl-2, .mx-xl-2 {
	margin-left: .5rem!important
}
.m-xl-3 {
	margin: 1rem!important
}
.mt-xl-3, .my-xl-3 {
	margin-top: 1rem!important
}
.mr-xl-3, .mx-xl-3 {
	margin-right: 1rem!important
}
.mb-xl-3, .my-xl-3 {
	margin-bottom: 1rem!important
}
.ml-xl-3, .mx-xl-3 {
	margin-left: 1rem!important
}
.m-xl-4 {
	margin: 1.5rem!important
}
.mt-xl-4, .my-xl-4 {
	margin-top: 1.5rem!important
}
.mr-xl-4, .mx-xl-4 {
	margin-right: 1.5rem!important
}
.mb-xl-4, .my-xl-4 {
	margin-bottom: 1.5rem!important
}
.ml-xl-4, .mx-xl-4 {
	margin-left: 1.5rem!important
}
.m-xl-5 {
	margin: 3rem!important
}
.mt-xl-5, .my-xl-5 {
	margin-top: 3rem!important
}
.mr-xl-5, .mx-xl-5 {
	margin-right: 3rem!important
}
.mb-xl-5, .my-xl-5 {
	margin-bottom: 3rem!important
}
.ml-xl-5, .mx-xl-5 {
	margin-left: 3rem!important
}
.m-xl-6 {
	margin: 6rem!important
}
.mt-xl-6, .my-xl-6 {
	margin-top: 6rem!important
}
.mr-xl-6, .mx-xl-6 {
	margin-right: 6rem!important
}
.mb-xl-6, .my-xl-6 {
	margin-bottom: 6rem!important
}
.ml-xl-6, .mx-xl-6 {
	margin-left: 6rem!important
}
.p-xl-0 {
	padding: 0!important
}
.pt-xl-0, .py-xl-0 {
	padding-top: 0!important
}
.pr-xl-0, .px-xl-0 {
	padding-right: 0!important
}
.pb-xl-0, .py-xl-0 {
	padding-bottom: 0!important
}
.pl-xl-0, .px-xl-0 {
	padding-left: 0!important
}
.p-xl-1 {
	padding: .25rem!important
}
.pt-xl-1, .py-xl-1 {
	padding-top: .25rem!important
}
.pr-xl-1, .px-xl-1 {
	padding-right: .25rem!important
}
.pb-xl-1, .py-xl-1 {
	padding-bottom: .25rem!important
}
.pl-xl-1, .px-xl-1 {
	padding-left: .25rem!important
}
.p-xl-2 {
	padding: .5rem!important
}
.pt-xl-2, .py-xl-2 {
	padding-top: .5rem!important
}
.pr-xl-2, .px-xl-2 {
	padding-right: .5rem!important
}
.pb-xl-2, .py-xl-2 {
	padding-bottom: .5rem!important
}
.pl-xl-2, .px-xl-2 {
	padding-left: .5rem!important
}
.p-xl-3 {
	padding: 1rem!important
}
.pt-xl-3, .py-xl-3 {
	padding-top: 1rem!important
}
.pr-xl-3, .px-xl-3 {
	padding-right: 1rem!important
}
.pb-xl-3, .py-xl-3 {
	padding-bottom: 1rem!important
}
.pl-xl-3, .px-xl-3 {
	padding-left: 1rem!important
}
.p-xl-4 {
	padding: 1.5rem!important
}
.pt-xl-4, .py-xl-4 {
	padding-top: 1.5rem!important
}
.pr-xl-4, .px-xl-4 {
	padding-right: 1.5rem!important
}
.pb-xl-4, .py-xl-4 {
	padding-bottom: 1.5rem!important
}
.pl-xl-4, .px-xl-4 {
	padding-left: 1.5rem!important
}
.p-xl-5 {
	padding: 3rem!important
}
.pt-xl-5, .py-xl-5 {
	padding-top: 3rem!important
}
.pr-xl-5, .px-xl-5 {
	padding-right: 3rem!important
}
.pb-xl-5, .py-xl-5 {
	padding-bottom: 3rem!important
}
.pl-xl-5, .px-xl-5 {
	padding-left: 3rem!important
}
.p-xl-6 {
	padding: 6rem!important
}
.pt-xl-6, .py-xl-6 {
	padding-top: 6rem!important
}
.pr-xl-6, .px-xl-6 {
	padding-right: 6rem!important
}
.pb-xl-6, .py-xl-6 {
	padding-bottom: 6rem!important
}
.pl-xl-6, .px-xl-6 {
	padding-left: 6rem!important
}
.m-xl-n1 {
	margin: -.25rem!important
}
.mt-xl-n1, .my-xl-n1 {
	margin-top: -.25rem!important
}
.mr-xl-n1, .mx-xl-n1 {
	margin-right: -.25rem!important
}
.mb-xl-n1, .my-xl-n1 {
	margin-bottom: -.25rem!important
}
.ml-xl-n1, .mx-xl-n1 {
	margin-left: -.25rem!important
}
.m-xl-n2 {
	margin: -.5rem!important
}
.mt-xl-n2, .my-xl-n2 {
	margin-top: -.5rem!important
}
.mr-xl-n2, .mx-xl-n2 {
	margin-right: -.5rem!important
}
.mb-xl-n2, .my-xl-n2 {
	margin-bottom: -.5rem!important
}
.ml-xl-n2, .mx-xl-n2 {
	margin-left: -.5rem!important
}
.m-xl-n3 {
	margin: -1rem!important
}
.mt-xl-n3, .my-xl-n3 {
	margin-top: -1rem!important
}
.mr-xl-n3, .mx-xl-n3 {
	margin-right: -1rem!important
}
.mb-xl-n3, .my-xl-n3 {
	margin-bottom: -1rem!important
}
.ml-xl-n3, .mx-xl-n3 {
	margin-left: -1rem!important
}
.m-xl-n4 {
	margin: -1.5rem!important
}
.mt-xl-n4, .my-xl-n4 {
	margin-top: -1.5rem!important
}
.mr-xl-n4, .mx-xl-n4 {
	margin-right: -1.5rem!important
}
.mb-xl-n4, .my-xl-n4 {
	margin-bottom: -1.5rem!important
}
.ml-xl-n4, .mx-xl-n4 {
	margin-left: -1.5rem!important
}
.m-xl-n5 {
	margin: -3rem!important
}
.mt-xl-n5, .my-xl-n5 {
	margin-top: -3rem!important
}
.mr-xl-n5, .mx-xl-n5 {
	margin-right: -3rem!important
}
.mb-xl-n5, .my-xl-n5 {
	margin-bottom: -3rem!important
}
.ml-xl-n5, .mx-xl-n5 {
	margin-left: -3rem!important
}
.m-xl-n6 {
	margin: -6rem!important
}
.mt-xl-n6, .my-xl-n6 {
	margin-top: -6rem!important
}
.mr-xl-n6, .mx-xl-n6 {
	margin-right: -6rem!important
}
.mb-xl-n6, .my-xl-n6 {
	margin-bottom: -6rem!important
}
.ml-xl-n6, .mx-xl-n6 {
	margin-left: -6rem!important
}
.m-xl-auto {
	margin: auto!important
}
.mt-xl-auto, .my-xl-auto {
	margin-top: auto!important
}
.mr-xl-auto, .mx-xl-auto {
	margin-right: auto!important
}
.mb-xl-auto, .my-xl-auto {
	margin-bottom: auto!important
}
.ml-xl-auto, .mx-xl-auto {
	margin-left: auto!important
}
}
.stretched-link:after {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 1;
	pointer-events: auto;
	content: "";
	background-color: transparent
}
.text-monospace {
	font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace!important
}
.text-justify {
	text-align: justify!important
}
.text-wrap {
	white-space: normal!important
}
.text-nowrap {
	white-space: nowrap!important
}
.text-truncate {
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}
.text-left {
	text-align: left!important
}
.text-right {
	text-align: right!important
}
.text-center {
	text-align: center!important
}

@media (min-width:576px) {
.text-sm-left {
	text-align: left!important
}
.text-sm-right {
	text-align: right!important
}
.text-sm-center {
	text-align: center!important
}
}

@media (min-width:768px) {
.text-md-left {
	text-align: left!important
}
.text-md-right {
	text-align: right!important
}
.text-md-center {
	text-align: center!important
}
}

@media (min-width:992px) {
.text-lg-left {
	text-align: left!important
}
.text-lg-right {
	text-align: right!important
}
.text-lg-center {
	text-align: center!important
}
}

@media (min-width:1200px) {
.text-xl-left {
	text-align: left!important
}
.text-xl-right {
	text-align: right!important
}
.text-xl-center {
	text-align: center!important
}
}
.text-lowercase {
	text-transform: lowercase!important
}
.text-uppercase {
	text-transform: uppercase!important
}
.text-capitalize {
	text-transform: capitalize!important
}
.font-weight-light {
	font-weight: 300!important
}
.font-weight-lighter {
	font-weight: lighter!important
}
.font-weight-normal {
	font-weight: 400!important
}
.font-weight-bold {
	font-weight: 700!important
}
.font-weight-bolder {
	font-weight: bolder!important
}
.font-italic {
	font-style: italic!important
}
.text-primary {
	color: <?= $themeColor; ?>!important
}
a.text-primary:focus, a.text-primary:hover {
	color: #234875!important
}
.text-secondary {
	color: #f6f7f9!important
}
a.text-secondary:focus, a.text-secondary:hover {
	color: #c8ceda!important
}
.text-success {
	color: #097b0a!important
}
a.text-success:focus, a.text-success:hover {
	color: #005649!important
}
.text-info {
	color: #0179a8!important
}
a.text-info:focus, a.text-info:hover {
	color: #01425c!important
}
.text-warning {
	color: #f7c46c!important
}
a.text-warning:focus, a.text-warning:hover {
	color: #f3a723!important
}
.text-danger {
	color: #ff0538!important
}
a.text-danger:focus, a.text-danger:hover {
	color: #90467c!important
}
.text-light {
	color: #f6f7f9!important
}
a.text-light:focus, a.text-light:hover {
	color: #c8ceda!important
}
.text-dark {
	color: #222230!important
}
a.text-dark:focus, a.text-dark:hover {
	color: #020203!important
}
.text-body {
	color: #363642!important
}
.text-muted {
	color: #888c9b!important
}
.text-black-50 {
	color: rgba(20,20,31,.5)!important
}
.text-white-50 {
	color: hsla(0,0%,100%,.5)!important
}
.text-hide {
	font: 0/0 a;
	color: transparent;
	text-shadow: none;
	background-color: transparent;
	border: 0
}
.text-decoration-none {
	text-decoration: none!important
}
.text-break {
	word-wrap: break-word!important
}
.text-reset {
	color: inherit!important
}
.visible {
	visibility: visible!important
}
.invisible {
	visibility: hidden!important
}

@media print {
*, :after, :before {
	text-shadow: none!important;
	box-shadow: none!important
}
a:not(.btn) {
	text-decoration: underline
}
abbr[title]:after {
	content: " (" attr(title) ")"
}
pre {
	white-space: pre-wrap!important
}
blockquote, pre {
	border: 1px solid #a6abbd;
	page-break-inside: avoid
}
thead {
	display: table-header-group
}
img, tr {
	page-break-inside: avoid
}
h2, h3, p {
	orphans: 3;
	widows: 3
}
h2, h3 {
	page-break-after: avoid
}
@page {
	size: a3
}
.container, body {
	min-width: 992px!important
}
.navbar {
	display: none
}
.badge {
	border: 1px solid #14141f
}
.table {
	border-collapse: collapse!important
}
.table td, .table th {
	background-color: #fff!important
}
.table-bordered td, .table-bordered th {
	border: 1px solid #d6d8e1!important
}
.table-dark {
	color: inherit
}
.table-dark tbody+tbody, .table-dark td, .table-dark th, .table-dark thead th {
	border-color: #ecedf1
}
.table .thead-dark th {
	color: inherit;
	border-color: #ecedf1
}
}
.blockquote, blockquote {
	padding-left: 1rem;
	font-size: 1.25em;
	color: #363642;
	border-left: 4px solid rgba(34,34,48,.1)
}
.blockquote.text-right, blockquote.text-right {
	padding-right: 1rem;
	padding-left: 0;
	border-left: 0;
	border-right: 4px solid rgba(34,34,48,.1)
}
.blockquote>footer, blockquote>footer {
	display: block;
	font-size: 80%;
	color: #888c9b
}
.blockquote>footer:before, blockquote>footer:before {
	content: "\2014 \00A0"
}
dl:last-child {
	margin-bottom: 0
}
.display-1 {
	font-size: calc(1.56rem + 3.72vw)
}
.display-2 {
	font-size: calc(1.5056rem + 3.0672vw)
}
.display-3 {
	font-size: calc(1.458rem + 2.496vw)
}
.display-4 {
	font-size: calc(1.4163rem + 1.9956vw)
}
.lead {
	font-size: 1.125rem
}
.img-float-1 {
	margin-left: -20px;
	max-width: 8.33333vw
}
.img-float-2 {
	margin-left: -20px;
	max-width: 16.66667vw
}
.img-float-3 {
	margin-left: -20px;
	max-width: 25vw
}
.img-float-4 {
	margin-left: -20px;
	max-width: 33.33333vw
}
.img-float-5 {
	margin-left: -20px;
	max-width: 41.66667vw
}
.img-float-6 {
	margin-left: -20px;
	max-width: 50vw
}
.img-float-7 {
	margin-left: -20px;
	max-width: 58.33333vw
}
.img-float-8 {
	margin-left: -20px;
	max-width: 66.66667vw
}
.img-float-9 {
	margin-left: -20px;
	max-width: 75vw
}
.img-float-10 {
	margin-left: -20px;
	max-width: 83.33333vw
}
.img-float-11 {
	margin-left: -20px;
	max-width: 91.66667vw
}
.img-float-12 {
	margin-left: -20px;
	max-width: 100vw
}

@media (min-width:576px) {
.img-float-sm-1 {
	margin-left: -20px;
	max-width: 8.33333vw
}
.img-float-sm-2 {
	margin-left: -20px;
	max-width: 16.66667vw
}
.img-float-sm-3 {
	margin-left: -20px;
	max-width: 25vw
}
.img-float-sm-4 {
	margin-left: -20px;
	max-width: 33.33333vw
}
.img-float-sm-5 {
	margin-left: -20px;
	max-width: 41.66667vw
}
.img-float-sm-6 {
	margin-left: -20px;
	max-width: 50vw
}
.img-float-sm-7 {
	margin-left: -20px;
	max-width: 58.33333vw
}
.img-float-sm-8 {
	margin-left: -20px;
	max-width: 66.66667vw
}
.img-float-sm-9 {
	margin-left: -20px;
	max-width: 75vw
}
.img-float-sm-10 {
	margin-left: -20px;
	max-width: 83.33333vw
}
.img-float-sm-11 {
	margin-left: -20px;
	max-width: 91.66667vw
}
.img-float-sm-12 {
	margin-left: -20px;
	max-width: 100vw
}
}

@media (min-width:768px) {
.img-float-md-1 {
	margin-left: -20px;
	max-width: 8.33333vw
}
.img-float-md-2 {
	margin-left: -20px;
	max-width: 16.66667vw
}
.img-float-md-3 {
	margin-left: -20px;
	max-width: 25vw
}
.img-float-md-4 {
	margin-left: -20px;
	max-width: 33.33333vw
}
.img-float-md-5 {
	margin-left: -20px;
	max-width: 41.66667vw
}
.img-float-md-6 {
	margin-left: -20px;
	max-width: 50vw
}
.img-float-md-7 {
	margin-left: -20px;
	max-width: 58.33333vw
}
.img-float-md-8 {
	margin-left: -20px;
	max-width: 66.66667vw
}
.img-float-md-9 {
	margin-left: -20px;
	max-width: 75vw
}
.img-float-md-10 {
	margin-left: -20px;
	max-width: 83.33333vw
}
.img-float-md-11 {
	margin-left: -20px;
	max-width: 91.66667vw
}
.img-float-md-12 {
	margin-left: -20px;
	max-width: 100vw
}
}

@media (min-width:992px) {
.img-float-lg-1 {
	margin-left: -20px;
	max-width: 8.33333vw
}
.img-float-lg-2 {
	margin-left: -20px;
	max-width: 16.66667vw
}
.img-float-lg-3 {
	margin-left: -20px;
	max-width: 25vw
}
.img-float-lg-4 {
	margin-left: -20px;
	max-width: 33.33333vw
}
.img-float-lg-5 {
	margin-left: -20px;
	max-width: 41.66667vw
}
.img-float-lg-6 {
	margin-left: -20px;
	max-width: 50vw
}
.img-float-lg-7 {
	margin-left: -20px;
	max-width: 58.33333vw
}
.img-float-lg-8 {
	margin-left: -20px;
	max-width: 66.66667vw
}
.img-float-lg-9 {
	margin-left: -20px;
	max-width: 75vw
}
.img-float-lg-10 {
	margin-left: -20px;
	max-width: 83.33333vw
}
.img-float-lg-11 {
	margin-left: -20px;
	max-width: 91.66667vw
}
.img-float-lg-12 {
	margin-left: -20px;
	max-width: 100vw
}
}

@media (min-width:1200px) {
.img-float-xl-1 {
	margin-left: -20px;
	max-width: 8.33333vw
}
.img-float-xl-2 {
	margin-left: -20px;
	max-width: 16.66667vw
}
.img-float-xl-3 {
	margin-left: -20px;
	max-width: 25vw
}
.img-float-xl-4 {
	margin-left: -20px;
	max-width: 33.33333vw
}
.img-float-xl-5 {
	margin-left: -20px;
	max-width: 41.66667vw
}
.img-float-xl-6 {
	margin-left: -20px;
	max-width: 50vw
}
.img-float-xl-7 {
	margin-left: -20px;
	max-width: 58.33333vw
}
.img-float-xl-8 {
	margin-left: -20px;
	max-width: 66.66667vw
}
.img-float-xl-9 {
	margin-left: -20px;
	max-width: 75vw
}
.img-float-xl-10 {
	margin-left: -20px;
	max-width: 83.33333vw
}
.img-float-xl-11 {
	margin-left: -20px;
	max-width: 91.66667vw
}
.img-float-xl-12 {
	margin-left: -20px;
	max-width: 100vw
}
}
pre>.hljs {
	padding: 1rem;
	border-radius: .2rem
}
.card>pre>.hljs {
	border-radius: 0
}
.card>pre:last-child {
	margin-bottom: 0
}
.card>pre:last-child>.hljs {
	border-bottom-right-radius: .25rem;
	border-bottom-left-radius: .25rem
}
td.hljs-ln-numbers {
	padding-right: 10px!important;
	padding-left: 5px!important;
	text-align: center;
	color: #363642;
	background: #e6e8ed;
	vertical-align: top;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
td.hljs-ln-code {
	padding-left: 10px
}
[class^=container-] {
	width: 100%;
	padding-right: 10px;
	padding-left: 10px;
	margin-right: auto;
	margin-left: auto
}

@media (min-width:576px) {
.container-sm {
	max-width: 540px
}
.container-fluid-sm {
	max-width: 100%
}
}

@media (min-width:768px) {
.container-sm {
	max-width: 720px
}
.container-fluid-sm {
	max-width: 100%
}
}

@media (min-width:992px) {
.container-sm {
	max-width: 960px
}
.container-fluid-sm {
	max-width: 100%
}
}

@media (min-width:1200px) {
.container-sm {
	max-width: 1140px
}
.container-fluid-sm {
	max-width: 100%
}
}
.navbar>.container-fluid-sm, .navbar>.container-sm {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between
}

@media (min-width:768px) {
.container-md {
	max-width: 720px
}
.container-fluid-md {
	max-width: 100%
}
}

@media (min-width:992px) {
.container-md {
	max-width: 960px
}
.container-fluid-md {
	max-width: 100%
}
}

@media (min-width:1200px) {
.container-md {
	max-width: 1140px
}
.container-fluid-md {
	max-width: 100%
}
}
.navbar>.container-fluid-md, .navbar>.container-md {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between
}

@media (min-width:992px) {
.container-lg {
	max-width: 960px
}
.container-fluid-lg {
	max-width: 100%
}
}

@media (min-width:1200px) {
.container-lg {
	max-width: 1140px
}
.container-fluid-lg {
	max-width: 100%
}
}
.navbar>.container-fluid-lg, .navbar>.container-lg {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between
}

@media (min-width:1200px) {
.container-xl {
	max-width: 1140px
}
.container-fluid-xl {
	max-width: 100%
}
}
.navbar>.container-fluid-xl, .navbar>.container-xl {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between
}
.col-1>.col-fix {
	max-width: 95px
}
.col-2>.col-fix {
	max-width: 190px
}
.col-3>.col-fix {
	max-width: 285px
}
.col-4>.col-fix {
	max-width: 380px
}
.col-5>.col-fix {
	max-width: 475px
}
.col-6>.col-fix {
	max-width: 570px
}
.col-7>.col-fix {
	max-width: 665px
}
.col-8>.col-fix {
	max-width: 760px
}
.col-9>.col-fix {
	max-width: 855px
}
.col-10>.col-fix {
	max-width: 950px
}
.col-11>.col-fix {
	max-width: 1045px
}
.col-12>.col-fix {
	max-width: 1140px
}

@media (min-width:576px) {
.col-sm-1>.col-fix {
	max-width: 95px
}
.col-sm-2>.col-fix {
	max-width: 190px
}
.col-sm-3>.col-fix {
	max-width: 285px
}
.col-sm-4>.col-fix {
	max-width: 380px
}
.col-sm-5>.col-fix {
	max-width: 475px
}
.col-sm-6>.col-fix {
	max-width: 570px
}
.col-sm-7>.col-fix {
	max-width: 665px
}
.col-sm-8>.col-fix {
	max-width: 760px
}
.col-sm-9>.col-fix {
	max-width: 855px
}
.col-sm-10>.col-fix {
	max-width: 950px
}
.col-sm-11>.col-fix {
	max-width: 1045px
}
.col-sm-12>.col-fix {
	max-width: 1140px
}
}

@media (min-width:768px) {
.col-md-1>.col-fix {
	max-width: 95px
}
.col-md-2>.col-fix {
	max-width: 190px
}
.col-md-3>.col-fix {
	max-width: 285px
}
.col-md-4>.col-fix {
	max-width: 380px
}
.col-md-5>.col-fix {
	max-width: 475px
}
.col-md-6>.col-fix {
	max-width: 570px
}
.col-md-7>.col-fix {
	max-width: 665px
}
.col-md-8>.col-fix {
	max-width: 760px
}
.col-md-9>.col-fix {
	max-width: 855px
}
.col-md-10>.col-fix {
	max-width: 950px
}
.col-md-11>.col-fix {
	max-width: 1045px
}
.col-md-12>.col-fix {
	max-width: 1140px
}
}

@media (min-width:992px) {
.col-lg-1>.col-fix {
	max-width: 95px
}
.col-lg-2>.col-fix {
	max-width: 190px
}
.col-lg-3>.col-fix {
	max-width: 285px
}
.col-lg-4>.col-fix {
	max-width: 380px
}
.col-lg-5>.col-fix {
	max-width: 475px
}
.col-lg-6>.col-fix {
	max-width: 570px
}
.col-lg-7>.col-fix {
	max-width: 665px
}
.col-lg-8>.col-fix {
	max-width: 760px
}
.col-lg-9>.col-fix {
	max-width: 855px
}
.col-lg-10>.col-fix {
	max-width: 950px
}
.col-lg-11>.col-fix {
	max-width: 1045px
}
.col-lg-12>.col-fix {
	max-width: 1140px
}
}

@media (min-width:1200px) {
.col-xl-1>.col-fix {
	max-width: 95px
}
.col-xl-2>.col-fix {
	max-width: 190px
}
.col-xl-3>.col-fix {
	max-width: 285px
}
.col-xl-4>.col-fix {
	max-width: 380px
}
.col-xl-5>.col-fix {
	max-width: 475px
}
.col-xl-6>.col-fix {
	max-width: 570px
}
.col-xl-7>.col-fix {
	max-width: 665px
}
.col-xl-8>.col-fix {
	max-width: 760px
}
.col-xl-9>.col-fix {
	max-width: 855px
}
.col-xl-10>.col-fix {
	max-width: 950px
}
.col-xl-11>.col-fix {
	max-width: 1045px
}
.col-xl-12>.col-fix {
	max-width: 1140px
}
}
.row-border, .row-dashed {
	overflow: hidden
}
.row-border>[class^=col-]:before, .row-dashed>[class^=col-]:before {
	position: absolute;
	content: " ";
	height: 100%;
	top: 0;
	left: -1px
}
.row-border>[class^=col-]:after, .row-dashed>[class^=col-]:after {
	position: absolute;
	content: " ";
	width: 100%;
	height: 0;
	top: auto;
	left: 0;
	bottom: -1px
}
.row-border>[class^=col-]:before {
	border-left: 1px solid rgba(34,34,48,.1)
}
.row-border>[class^=col-]:after {
	border-bottom: 1px solid rgba(34,34,48,.1)
}
.row-dashed>[class^=col-]:before {
	border-left: 1px dashed rgba(34,34,48,.1)
}
.row-dashed>[class^=col-]:after {
	border-bottom: 1px dashed rgba(34,34,48,.1)
}
.embed-responsive img.embed-responsive-item {
	top: 50%;
	left: 50%;
	bottom: auto;
	height: auto;
	transform: translate3d(-50%, -50%, 0);
	max-width: 200%
}
.table thead td, .table thead th {
	border-top-width: 0;
	border-bottom-width: 1px
}
.table.table-bordered thead td, .table.table-bordered thead th {
	border-top-width: 1px
}
.card>.table, .card>.table-responsive>.table {
	margin-bottom: 0
}
.card>.table-responsive>.table.table-bordered thead td, .card>.table-responsive>.table.table-bordered thead th, .card>.table.table-bordered thead td, .card>.table.table-bordered thead th {
	border-top-width: 0;
	border-bottom-width: 0
}
.card>.table-responsive>.table td:first-child, .card>.table-responsive>.table th:first-child, .card>.table td:first-child, .card>.table th:first-child {
	padding-left: 1rem;
	border-left: 0
}
.card>.table-responsive>.table td:last-child, .card>.table-responsive>.table th:last-child, .card>.table td:last-child, .card>.table th:last-child {
	padding-right: 1rem;
	border-right: 0
}
.card>.table-responsive:last-child>.table.table-bordered tr:last-child td, .card>.table-responsive:last-child>.table.table-bordered tr:last-child th, .card>.table:last-child.table-bordered tr:last-child td, .card>.table:last-child.table-bordered tr:last-child th {
	border-bottom-width: 0
}
.table>tbody:first-child tr:first-child>td:first-child, .table>tbody:first-child tr:first-child>th:first-child, .table>thead tr:first-child>td:first-child, .table>thead tr:first-child>th:first-child {
	border-top-left-radius: .25rem
}
.table>tbody:first-child tr:first-child>td:last-child, .table>tbody:first-child tr:first-child>th:last-child, .table>thead tr:first-child>td:last-child, .table>thead tr:first-child>th:last-child {
	border-top-right-radius: .25rem
}
.table>tbody:last-child tr:last-child>td:first-child, .table>tbody:last-child tr:last-child>th:first-child, .table>tfoot tr:last-child>td:first-child, .table>tfoot tr:last-child>th:first-child {
	border-bottom-left-radius: .25rem
}
.table>tbody:last-child tr:last-child>td:last-child, .table>tbody:last-child tr:last-child>th:last-child, .table>tfoot tr:last-child>td:last-child, .table>tfoot tr:last-child>th:last-child {
	border-bottom-right-radius: .25rem
}
.table-active, .table-active>td, .table-active>th {
	color: #fff
}
.row-details.collapsing {
	display: none;
	transition: none
}

@media (max-width:575.98px) {
.card-fluid>.table-responsive>.table>tbody:first-child tr:first-child>td:first-child, .card-fluid>.table-responsive>.table>tbody:first-child tr:first-child>th:first-child, .card-fluid>.table-responsive>.table>thead tr:first-child>td:first-child, .card-fluid>.table-responsive>.table>thead tr:first-child>th:first-child, .card-fluid>.table>tbody:first-child tr:first-child>td:first-child, .card-fluid>.table>tbody:first-child tr:first-child>th:first-child, .card-fluid>.table>thead tr:first-child>td:first-child, .card-fluid>.table>thead tr:first-child>th:first-child {
	border-top-left-radius: 0
}
.card-fluid>.table-responsive>.table>tbody:first-child tr:first-child>td:last-child, .card-fluid>.table-responsive>.table>tbody:first-child tr:first-child>th:last-child, .card-fluid>.table-responsive>.table>thead tr:first-child>td:last-child, .card-fluid>.table-responsive>.table>thead tr:first-child>th:last-child, .card-fluid>.table>tbody:first-child tr:first-child>td:last-child, .card-fluid>.table>tbody:first-child tr:first-child>th:last-child, .card-fluid>.table>thead tr:first-child>td:last-child, .card-fluid>.table>thead tr:first-child>th:last-child {
	border-top-right-radius: 0
}
.card-fluid>.table-responsive>.table>tbody:last-child tr:last-child>td:first-child, .card-fluid>.table-responsive>.table>tbody:last-child tr:last-child>th:first-child, .card-fluid>.table-responsive>.table>tfoot tr:last-child>td:first-child, .card-fluid>.table-responsive>.table>tfoot tr:last-child>th:first-child, .card-fluid>.table>tbody:last-child tr:last-child>td:first-child, .card-fluid>.table>tbody:last-child tr:last-child>th:first-child, .card-fluid>.table>tfoot tr:last-child>td:first-child, .card-fluid>.table>tfoot tr:last-child>th:first-child {
	border-bottom-left-radius: 0
}
.card-fluid>.table-responsive>.table>tbody:last-child tr:last-child>td:last-child, .card-fluid>.table-responsive>.table>tbody:last-child tr:last-child>th:last-child, .card-fluid>.table-responsive>.table>tfoot tr:last-child>td:last-child, .card-fluid>.table-responsive>.table>tfoot tr:last-child>th:last-child, .card-fluid>.table>tbody:last-child tr:last-child>td:last-child, .card-fluid>.table>tbody:last-child tr:last-child>th:last-child, .card-fluid>.table>tfoot tr:last-child>td:last-child, .card-fluid>.table>tfoot tr:last-child>th:last-child {
	border-bottom-right-radius: 0
}
}
.table-fixed {
	table-layout: fixed;
	min-width: 400px
}
.table-fixed tr>td, .table-fixed tr>th {
	overflow: hidden
}
.thead-dd {
	display: inline-block;
	color: #888c9b
}
.thead-dd>.custom-control {
	position: absolute;
	top: .2em;
	display: inline-block
}
.thead-dd .thead-btn {
	padding-left: 1.5rem
}
.col-checker {
	width: 2rem
}
.thead-btn {
	display: inline-block;
	margin-left: -.375rem;
	padding: .125rem .375rem;
	text-align: center;
	white-space: nowrap;
	vertical-align: middle;
	background: linear-gradient(180deg, #fff, #f6f7f9);
	border: 1px solid #c6c9d5;
	box-shadow: 0 1px 0 0 rgba(20,20,31,.05);
	border-radius: .25rem
}
.thead-btn .custom-control {
	display: inline-block;
	padding-left: 1rem
}
.btn {
	height: calc(1.5em + .75rem + 2px);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden
}
.btn-group-sm>.btn, .btn-sm {
	height: calc(1.5em + .5rem + 2px)
}
.btn-group-lg>.btn, .btn-lg {
	height: calc(1.75em + 1rem + 2px)
}

@media (min-width:768px) {
.btn {
	height: 2.25rem;
	font-size: .875rem
}
.btn-group-sm>.btn, .btn.btn-sm {
	height: 1.8125rem;
	font-size: .8125rem
}
.btn-group-lg>.btn, .btn.btn-lg {
	height: 2.75rem;
	font-size: 1rem
}
}
.btn-xs {
	font-size: .8125rem;
	padding: .125rem .5rem;
	height: auto
}
.btn .hamburger {
	padding: 0;
	width: auto;
	height: auto
}
.btn .hamburger:hover {
	background-color: transparent
}
.btn-floated {
	position: fixed;
	right: 1.25rem;
	bottom: 4rem;
	width: 3.5rem;
	height: 3.5rem;
	font-size: 1.25rem;
	line-height: 1;
	border-radius: 3rem;
	border: 0;
	z-index: 5;
	box-shadow: 0 3px 5px -1px rgba(20,20,31,.2), 0 6px 10px 0 rgba(20,20,31,.14), 0 1px 18px 0 rgba(20,20,31,.12)
}

@media (min-width:768px) {
.btn-floated {
	bottom: 1.25rem
}
}
.btn-floated.btn-lg, .btn-group-lg>.btn-floated.btn {
	width: 4rem;
	height: 4rem;
	font-size: 1.25rem;
	line-height: 1
}
.btn-floated.btn-sm, .btn-group-sm>.btn-floated.btn {
	width: 2.5rem;
	height: 2.5rem;
	font-size: 1rem;
	line-height: 1
}
.btn-floated:focus, .btn-floated:hover {
	box-shadow: 0 3px 5px -1px rgba(20,20,31,.2), 0 6px 10px 0 rgba(20,20,31,.14), 0 1px 18px 0 rgba(20,20,31,.12)!important
}
.btn-floated:active {
	box-shadow: 0 7px 8px -4px rgba(20,20,31,.2), 0 12px 17px 2px rgba(20,20,31,.14), 0 5px 22px 4px rgba(20,20,31,.12)!important
}
.btn-primary {
	border-color: #2b5a92
}
.btn-primary:hover {
	box-shadow: none
}
.btn-primary.focus, .btn-primary:focus {
	border-color: #254e7f;
	box-shadow: inset 0 1px 0 0 #437fc7, 0 0 0 1px #254e7f
}
.btn-secondary {
	border-color: #dfe3ea
}
.btn-secondary:hover {
	box-shadow: none
}
.btn-secondary.focus, .btn-secondary:focus {
	border-color: #d0d5e0;
	box-shadow: inset 0 1px 0 0 #fff, 0 0 0 1px #d0d5e0
}
.btn-success {
	border-color: #007c69
}
.btn-success:hover {
	box-shadow: none
}
.btn-success.focus, .btn-success:focus {
	border-color: #006254;
	box-shadow: inset 0 1px 0 0 #00c8ab, 0 0 0 1px #006254
}
.btn-info {
	border-color: #015e82
}
.btn-info:hover {
	box-shadow: none
}
.btn-info.focus, .btn-info:focus {
	border-color: #014b69;
	box-shadow: inset 0 1px 0 0 #0194ce, 0 0 0 1px #014b69
}
.btn-warning {
	border-color: #f5b548
}
.btn-warning:hover {
	box-shadow: none
}
.btn-warning.focus, .btn-warning:focus {
	border-color: #f4ac30;
	box-shadow: inset 0 1px 0 0 #f9d390, 0 0 0 1px #f4ac30
}
.btn-danger {
	border-color: #a95292
}
.btn-danger:hover {
	box-shadow: none
}
.btn-danger.focus, .btn-danger:focus {
	border-color: #984a84;
	box-shadow: inset 0 1px 0 0 #c485b3, 0 0 0 1px #984a84
}
.btn-light {
	color: #888c9b;
	background-color: transparent;
	border-color: transparent
}
.btn-light.focus, .btn-light:focus, .btn-light:hover {
	background-color: #e6e8ed;
	color: #363642;
	border-color: #e6e8ed;
	box-shadow: none
}
.btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show>.btn-light.dropdown-toggle {
	color: #2e609c;
	border-color: transparent;
	background-color: rgba(52,108,176,.08);
	box-shadow: 0 0 0 1px rgba(52,108,176,0)
}
.btn-dark {
	color: #f6f7f9
}
.btn-dark:hover {
	box-shadow: none
}
.btn-dark.focus, .btn-dark:focus {
	border-color: #08080b;
	box-shadow: inset 0 1px 0 0 #323246, 0 0 0 1px #08080b
}
.btn-dark.disabled, .btn-dark:disabled, .btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show>.btn-dark.dropdown-toggle {
	color: #f6f7f9
}
.btn-secondary {
	color: #363642;
	background: linear-gradient(180deg, #fff, #f6f7f9);
	border-color: #d7dce5;
	box-shadow: 0 1px 0 0 rgba(20,20,31,.05)
}
.btn-secondary:hover {
	background: linear-gradient(180deg, #f6f7f9, #f6f7f9);
	border-color: #d7dce5
}
.btn-secondary.focus, .btn-secondary:focus {
	background: linear-gradient(180deg, #fff, #f6f7f9);
	border-color: <?= $themeColor; ?>;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.btn-secondary.disabled, .btn-secondary:disabled {
	background: linear-gradient(180deg, #f6f7f9, #f6f7f9);
	border-color: #d7dce5
}
.btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
	background: linear-gradient(180deg, #fff, #f6f7f9);
	box-shadow: inset 0 1px 1px 0 rgba(20,20,31,.1), inset 0 1px 4px 0 rgba(20,20,31,.2);
	border-color: #d7dce5
}
.btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus, .show>.btn-secondary.dropdown-toggle:focus {
	box-shadow: inset 0 1px 1px 0 rgba(20,20,31,.1), inset 0 1px 4px 0 rgba(20,20,31,.2)
}
.btn-outline-secondary {
	color: #888c9b;
	border-color: #a6abbd
}
.btn-outline-secondary.focus, .btn-outline-secondary:focus, .btn-outline-secondary:hover, .btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active, .show>.btn-outline-secondary.dropdown-toggle {
	color: #363642;
	border-color: #a6abbd
}
.btn-subtle-primary {
	color: #2e609c;
	background-color: rgba(52,108,176,.08);
	border-color: transparent
}
.btn-subtle-primary.focus, .btn-subtle-primary:focus, .btn-subtle-primary:hover {
	color: #2e609c;
	background-color: rgba(52,108,176,.12);
	box-shadow: none
}
.btn-subtle-primary.disabled, .btn-subtle-primary:disabled {
	background-color: rgba(52,108,176,.08)
}
.btn-subtle-primary:not(:disabled):not(.disabled).active, .btn-subtle-primary:not(:disabled):not(.disabled):active, .show>.btn-subtle-primary.dropdown-toggle {
	background-color: rgba(52,108,176,.2)
}
.btn-subtle-secondary {
	color: #888c9b;
	background-color: rgba(246,247,249,.08);
	border-color: transparent
}
.btn-subtle-secondary.focus, .btn-subtle-secondary:focus, .btn-subtle-secondary:hover {
	color: #888c9b;
	background-color: rgba(246,247,249,.12);
	box-shadow: none
}
.btn-subtle-secondary.disabled, .btn-subtle-secondary:disabled {
	background-color: rgba(246,247,249,.08)
}
.btn-subtle-secondary:not(:disabled):not(.disabled).active, .btn-subtle-secondary:not(:disabled):not(.disabled):active, .show>.btn-subtle-secondary.dropdown-toggle {
	background-color: rgba(246,247,249,.2)
}
.btn-subtle-success {
	color: #008974;
	background-color: rgba(0,162,138,.08);
	border-color: transparent
}
.btn-subtle-success.focus, .btn-subtle-success:focus, .btn-subtle-success:hover {
	color: #008974;
	background-color: rgba(0,162,138,.12);
	box-shadow: none
}
.btn-subtle-success.disabled, .btn-subtle-success:disabled {
	background-color: rgba(0,162,138,.08)
}
.btn-subtle-success:not(:disabled):not(.disabled).active, .btn-subtle-success:not(:disabled):not(.disabled):active, .show>.btn-subtle-success.dropdown-toggle {
	background-color: rgba(0,162,138,.2)
}
.btn-subtle-info {
	color: #01678f;
	background-color: rgba(1,121,168,.08);
	border-color: transparent
}
.btn-subtle-info.focus, .btn-subtle-info:focus, .btn-subtle-info:hover {
	color: #01678f;
	background-color: rgba(1,121,168,.12);
	box-shadow: none
}
.btn-subtle-info.disabled, .btn-subtle-info:disabled {
	background-color: rgba(1,121,168,.08)
}
.btn-subtle-info:not(:disabled):not(.disabled).active, .btn-subtle-info:not(:disabled):not(.disabled):active, .show>.btn-subtle-info.dropdown-toggle {
	background-color: rgba(1,121,168,.2)
}
.btn-subtle-warning {
	color: #f6ba54;
	background-color: rgba(247,196,108,.08);
	border-color: transparent
}
.btn-subtle-warning.focus, .btn-subtle-warning:focus, .btn-subtle-warning:hover {
	color: #f6ba54;
	background-color: rgba(247,196,108,.12);
	box-shadow: none
}
.btn-subtle-warning.disabled, .btn-subtle-warning:disabled {
	background-color: rgba(247,196,108,.08)
}
.btn-subtle-warning:not(:disabled):not(.disabled).active, .btn-subtle-warning:not(:disabled):not(.disabled):active, .show>.btn-subtle-warning.dropdown-toggle {
	background-color: rgba(247,196,108,.2)
}
.btn-subtle-danger {
	color: #af5a98;
	background-color: rgba(183,107,163,.08);
	border-color: transparent
}
.btn-subtle-danger.focus, .btn-subtle-danger:focus, .btn-subtle-danger:hover {
	color: #af5a98;
	background-color: rgba(183,107,163,.12);
	box-shadow: none
}
.btn-subtle-danger.disabled, .btn-subtle-danger:disabled {
	background-color: rgba(183,107,163,.08)
}
.btn-subtle-danger:not(:disabled):not(.disabled).active, .btn-subtle-danger:not(:disabled):not(.disabled):active, .show>.btn-subtle-danger.dropdown-toggle {
	background-color: rgba(183,107,163,.2)
}
.btn-subtle-light {
	color: #363642;
	background-color: rgba(246,247,249,.08);
	border-color: transparent
}
.btn-subtle-light.focus, .btn-subtle-light:focus, .btn-subtle-light:hover {
	color: #363642;
	background-color: rgba(246,247,249,.12);
	box-shadow: none
}
.btn-subtle-light.disabled, .btn-subtle-light:disabled {
	background-color: rgba(246,247,249,.08)
}
.btn-subtle-light:not(:disabled):not(.disabled).active, .btn-subtle-light:not(:disabled):not(.disabled):active, .show>.btn-subtle-light.dropdown-toggle {
	background-color: rgba(246,247,249,.2)
}
.btn-subtle-dark {
	color: #363642;
	background-color: rgba(34,34,48,.08);
	border-color: transparent
}
.btn-subtle-dark.focus, .btn-subtle-dark:focus, .btn-subtle-dark:hover {
	color: #363642;
	background-color: rgba(34,34,48,.12);
	box-shadow: none
}
.btn-subtle-dark.disabled, .btn-subtle-dark:disabled {
	background-color: rgba(34,34,48,.08)
}
.btn-subtle-dark:not(:disabled):not(.disabled).active, .btn-subtle-dark:not(:disabled):not(.disabled):active, .show>.btn-subtle-dark.dropdown-toggle {
	background-color: rgba(34,34,48,.2)
}
.btn-reset {
	padding: 0 2px;
	font-size: inherit;
	line-height: inherit;
	color: inherit;
	background-color: transparent;
	border: 0;
	cursor: pointer
}
.btn-group-lg>.btn-reset.btn, .btn-group-sm>.btn-reset.btn, .btn-reset.btn, .btn-reset.btn-lg, .btn-reset.btn-sm {
	height: auto
}
.btn-reset:focus, .btn-reset:hover {
	color: inherit;
	text-decoration: inherit;
	box-shadow: none
}
.btn-reset.text-muted.active, .btn-reset.text-muted.focus, .btn-reset.text-muted.show, .btn-reset.text-muted:focus, .btn-reset.text-muted:hover {
	color: #363642!important
}
.btn-icon {
	padding: 0;
	line-height: calc(1.5em + .75rem + 2px);
	border-radius: 2.25rem;
	width: calc(1.5em + .75rem + 2px);
	height: calc(1.5em + .75rem + 2px)
}
.btn-group-sm>.btn-icon.btn, .btn-icon.btn-sm {
	line-height: calc(1.5em + .5rem + 2px);
	width: calc(1.5em + .5rem + 2px);
	height: calc(1.5em + .5rem + 2px)
}
.btn-group-lg>.btn-icon.btn, .btn-icon.btn-lg {
	line-height: calc(1.75em + 1rem + 2px);
	width: calc(1.75em + 1rem + 2px);
	height: calc(1.75em + 1rem + 2px)
}

@media (min-width:768px) {
.btn-icon {
	line-height: calc(1.5em + .75rem);
	width: 2.25rem;
	height: 2.25rem
}
.btn-group-sm>.btn-icon.btn, .btn-icon.btn-sm {
	line-height: calc(1.5em + .5rem);
	width: 1.8125rem;
	height: 1.8125rem
}
.btn-group-lg>.btn-icon.btn, .btn-icon.btn-lg {
	line-height: calc(1.75em + 1rem);
	width: 2.75rem;
	height: 2.75rem
}
}
.btn-account {
	position: relative;
	display: flex;
	margin: 0;
	border: 0;
	flex-wrap: none;
	align-items: center;
	background: none;
	color: inherit;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	cursor: pointer;
	transition: background-color .15s;
	outline: 0
}
.btn-account:focus, .btn-account:hover {
	color: inherit;
	text-decoration: none
}
.btn-account.focus, .btn-account.show, .btn-account:active, .btn-account:focus {
	outline: 0
}
.btn-account>.has-badge, .btn-account>.user-avatar {
	margin-right: .75rem
}
.btn-account .account-summary {
	margin-right: .75rem;
	display: block;
	text-align: left;
	flex: 1;
	overflow: hidden;
	text-overflow: clip;
	white-space: nowrap
}
.btn-account .account-description, .btn-account .account-name {
	margin: 0;
	display: block;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	font-weight: 500;
	line-height: 1rem
}
.btn-account .account-description {
	font-size: .75rem;
	font-weight: 400;
	opacity: .7
}
.btn-account .caret {
	border-top-width: 6px;
	border-right-width: 5px;
	border-left-width: 5px
}
.btn-account .account-icon {
	position: absolute;
	right: 1rem;
	top: 50%;
	font-size: .875rem;
	transform: translateY(-50%);
	opacity: .7
}
.btn-account .account-icon .caret, .btn-account .account-icon .fa-caret-down {
	transition: transform .2s ease-in-out
}
.btn-account[aria-expanded=true]>.account-icon>.caret, .btn-account[aria-expanded=true]>.account-icon>.fa-caret-down {
	transform: rotate(180deg)
}
.close:focus {
	outline: 0
}
.alert {
	border-width: 3px 0 0;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	border-top-left-radius: 0;
	border-top-right-radius: 0
}

@media (min-width:768px) {
.alert {
	font-size: .875rem
}
}
.alert.has-icon {
	padding-left: 4rem;
	min-height: 4rem
}
.card>.alert {
	border-radius: 0
}
.alert-icon {
	position: absolute;
	left: 1rem;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 2rem;
	height: 2rem;
	text-align: center;
	border-radius: 2rem
}
.alert-icon .fa, .alert-icon .oi {
	font-size: 1.25rem
}
.alert-primary .alert-icon {
	color: #fff;
	background-color: #2f5e99
}
.alert-secondary .alert-icon {
	color: #363642;
	background-color: #d2d3d6
}
.alert-success .alert-icon {
	color: #fff;
	background-color: #038b79
}
.alert-info .alert-icon {
	color: #fff;
	background-color: #046992
}
.alert-warning .alert-icon {
	color: #363642;
	background-color: #d3a860
}
.alert-danger .alert-icon {
	color: #fff;
	background-color: #9d5d8e
}
.alert-light .alert-icon {
	color: #363642;
	background-color: #d2d3d6
}
.alert-dark .alert-icon {
	color: #fff;
	background-color: #20202d
}
.alert-secondary {
	color: #363642;
	background-color: #f6f7f9;
	border-color: #888c9b
}
.alert-secondary .alert-icon {
	color: #888c9b;
	background-color: #e6e8ed
}
.alert-secondary hr {
	border-top-color: rgba(34,34,48,.1)
}
.alert-secondary .alert-link {
	color: <?= $themeColor; ?>
}
.alert-light {
	border-color: #a6abbd
}

@media (min-width:768px) {
.badge {
	font-size: 80%
}
}
.badge>a {
	color: inherit;
	font-weight: 600
}
.badge>a:hover {
	color: inherit;
	text-decoration: none
}
.badge-lg {
	padding: .375rem .5rem
}
.badge-subtle.badge-primary {
	color: #2e609c;
	background-color: rgba(52,108,176,.08)
}
.badge-subtle.badge-primary[href]:focus, .badge-subtle.badge-primary[href]:hover {
	color: #2e609c;
	text-decoration: none;
	background-color: rgba(52,108,176,.12)
}
.badge-subtle.badge-secondary {
	color: #888c9b;
	background-color: rgba(246,247,249,.08)
}
.badge-subtle.badge-secondary[href]:focus, .badge-subtle.badge-secondary[href]:hover {
	color: #888c9b;
	text-decoration: none;
	background-color: rgba(246,247,249,.12)
}
.badge-subtle.badge-success {
	color: #008974;
	background-color: rgba(0,162,138,.08)
}
.badge-subtle.badge-success[href]:focus, .badge-subtle.badge-success[href]:hover {
	color: #008974;
	text-decoration: none;
	background-color: rgba(0,162,138,.12)
}
.badge-subtle.badge-info {
	color: #01678f;
	background-color: rgba(1,121,168,.08)
}
.badge-subtle.badge-info[href]:focus, .badge-subtle.badge-info[href]:hover {
	color: #01678f;
	text-decoration: none;
	background-color: rgba(1,121,168,.12)
}
.badge-subtle.badge-warning {
	color: #f6ba54;
	background-color: rgba(247,196,108,.08)
}
.badge-subtle.badge-warning[href]:focus, .badge-subtle.badge-warning[href]:hover {
	color: #f6ba54;
	text-decoration: none;
	background-color: rgba(247,196,108,.12)
}
.badge-subtle.badge-danger {
	color: #af5a98;
	background-color: rgba(183,107,163,.08)
}
.badge-subtle.badge-danger[href]:focus, .badge-subtle.badge-danger[href]:hover {
	color: #af5a98;
	text-decoration: none;
	background-color: rgba(183,107,163,.12)
}
.badge-subtle.badge-light {
	color: #363642;
	background-color: rgba(246,247,249,.08)
}
.badge-subtle.badge-light[href]:focus, .badge-subtle.badge-light[href]:hover {
	color: #363642;
	text-decoration: none;
	background-color: rgba(246,247,249,.12)
}
.badge-subtle.badge-dark {
	color: #363642;
	background-color: rgba(34,34,48,.08)
}
.badge-subtle.badge-dark[href]:focus, .badge-subtle.badge-dark[href]:hover {
	color: #363642;
	text-decoration: none;
	background-color: rgba(34,34,48,.12)
}
.has-badge {
	position: relative;
	display: inline-block
}
.has-badge>.badge:last-child, .has-badge>.tile:last-child, .has-badge>.user-avatar:last-child {
	position: absolute;
	top: 0;
	left: 100%;
	transform: translate3d(-50%, 0, 0)
}
.has-badge>.tile:last-child, .has-badge>.user-avatar:last-child {
	line-height: 1.25;
	border: 3px solid #fff;
	box-shadow: none
}
.has-badge>.tile-circle+.tile, .has-badge>.tile-circle+.user-avatar, .has-badge>.user-avatar+.tile, .has-badge>.user-avatar+.user-avatar {
	transform: translate3d(-75%, 0, 0)
}
.has-badge>.tile-xl.tile-circle+.tile, .has-badge>.tile-xl.tile-circle+.user-avatar, .has-badge>.user-avatar-xl.user-avatar+.tile, .has-badge>.user-avatar-xl.user-avatar+.user-avatar {
	top: .5rem;
	transform: translate3d(-1.125rem, 0, 0)
}
.has-badge>.tile-xxl.tile-circle+.tile, .has-badge>.tile-xxl.tile-circle+.user-avatar, .has-badge>.user-avatar-xxl.user-avatar+.tile, .has-badge>.user-avatar-xxl.user-avatar+.user-avatar {
	top: 1rem;
	transform: translate3d(-1.5rem, 0, 0)
}
.has-badge-bottom>.badge:last-child, .has-badge-bottom>.tile:last-child, .has-badge-bottom>.user-avatar:last-child {
	top: auto;
	bottom: 0
}
.has-badge-bottom>.tile-xl.tile-circle+.tile, .has-badge-bottom>.tile-xl.tile-circle+.user-avatar, .has-badge-bottom>.user-avatar-xl.user-avatar+.tile, .has-badge-bottom>.user-avatar-xl.user-avatar+.user-avatar {
	top: auto;
	bottom: .5rem
}
.has-badge-bottom>.tile-xxl.tile-circle+.tile, .has-badge-bottom>.tile-xxl.tile-circle+.user-avatar, .has-badge-bottom>.user-avatar-xxl.user-avatar+.tile, .has-badge-bottom>.user-avatar-xxl.user-avatar+.user-avatar {
	top: auto;
	bottom: 1rem
}
legend {
	margin-bottom: 1.5rem;
	font-size: 1rem;
	font-weight: 600
}
.form-group legend {
	margin-bottom: .5rem
}
label>abbr {
	color: #ff0538
}
label>.badge, label>abbr {
	margin-left: .125rem
}
label>a:hover {
	text-decoration: none
}
label.input-group-append, label.input-group-prepend {
	margin-bottom: 0
}

@media (min-width:768px) {
.form-control {
	height: 2.25rem;
	font-size: .875rem
}
.form-control.form-control-sm {
	height: 1.8125rem;
	font-size: .8125rem
}
.form-control.form-control-lg {
	height: 2.75rem;
	font-size: 1rem
}
.form-check {
	font-size: .875rem
}
.col-form-label-lg {
	font-size: 1rem
}
}

@media (min-width:768px) {
.form-group .invalid-feedback, .form-group .small, .form-group .valid-feedback, .form-group small {
	font-size: 85%
}
}
.form-control-plaintext {
	font-size: inherit
}
.form-control {
	box-shadow: inset 0 1px 0 0 rgba(34,34,48,.05);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden
}
.form-control[readonly] {
	background-color: #fff
}
.form-control[readonly]:hover~.input-group-prepend .input-group-text {
	color: #363642
}
.form-control-reflow {
	background-color: transparent;
	border-color: transparent;
	box-shadow: none
}
.form-control-reflow:hover {
	background-color: #e6e8ed
}
.form-control-reflow:focus {
	background-color: #fff;
	border-color: <?= $themeColor; ?>
}
.form-actions {
	display: flex;
	padding-top: .5rem
}
.form-actions .btn+.btn, .form-actions .btn+.btn-group, .form-actions .btn-group+.btn, .form-actions .btn-group+.btn-group {
	margin-left: .125rem
}
.form-label-group {
	position: relative
}
.form-label-group>input, .form-label-group>label {
	padding: 0 .75rem
}
.form-label-group input, .form-label-group select {
	padding-top: 1.25rem;
	padding-bottom: .25rem;
	height: auto
}
.form-label-group>label {
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	padding-top: .25rem;
	padding-bottom: .25rem;
	width: 100%;
	margin-bottom: 0;
	line-height: 1.5;
	text-align: left;
	font-size: .75rem;
	color: #888c9b;
	border: 1px solid transparent;
	border-radius: .25rem;
	transition: all .1s ease-in-out;
	pointer-events: none
}
.form-label-group input::-webkit-input-placeholder {
color:transparent
}
.form-label-group input::-moz-placeholder {
color:transparent
}
.form-label-group input:-ms-input-placeholder {
color:transparent
}
.form-label-group input::-ms-input-placeholder {
color:transparent
}
.form-label-group input::placeholder {
color:transparent
}
.form-label-group input:placeholder-shown:not(:-webkit-autofill) {
padding-top:.75rem;
padding-bottom:.75rem
}
.form-label-group input:placeholder-shown:not(:-webkit-autofill)~label {
padding-top:.75rem;
padding-bottom:.75rem;
color:#888c9b;
font-size:inherit
}
.form-label-group input.placeholder-shown:not(:-webkit-autofill) {
	padding-top: .75rem;
	padding-bottom: .75rem
}
.form-label-group input.placeholder-shown:not(:-webkit-autofill)~label {
	padding-top: .75rem;
	padding-bottom: .75rem;
	color: #888c9b;
	font-size: inherit
}
.form-control.is-invalid, .form-control.is-valid, .was-validated .form-control:invalid, .was-validated .form-control:valid {
background-position:calc(100% - .75rem) calc(.375em + .1875rem)
}
.form-label-group>.form-control.is-invalid, .form-label-group>.form-control.is-valid, .was-validated .form-label-group>.form-control:invalid, .was-validated .form-label-group>.form-control:valid {
background-position:calc(100% - .75rem) calc(.75em + .1875rem)
}
.custom-select.is-invalid:focus, .form-control.is-invalid:focus, .was-validated .custom-select:invalid:focus, .was-validated .form-control:invalid:focus {
box-shadow:0 0 0 1px #ff0538
}
.custom-select.is-valid:focus, .form-control.is-valid:focus, .was-validated .custom-select:valid:focus, .was-validated .form-control:valid:focus {
box-shadow:0 0 0 1px #097b0a
}
.custom-control-input.is-invalid~.custom-control-label:before, .was-validated .custom-control-input:invalid~.custom-control-label:before {
border-color:#ff0538
}
.custom-control-input.is-valid~.custom-control-label:before, .was-validated .custom-control-input:valid~.custom-control-label:before {
border-color:#097b0a
}
.custom-file-input.is-invalid~.custom-file-label:after, .was-validated .custom-file-input:invalid~.custom-file-label:after {
border-color:#ff0538
}
.custom-file-input.is-invalid:focus~.custom-file-label, .was-validated .custom-file-input:invalid:focus~.custom-file-label {
border-color:#ff0538;
box-shadow:0 0 0 1px #ff0538
}
.custom-file-input.is-invalid:focus~.custom-file-label:after, .was-validated .custom-file-input:invalid:focus~.custom-file-label:after {
border-color:#ff0538
}
.custom-file-input.is-valid~.custom-file-label:after, .was-validated .custom-file-input:valid~.custom-file-label:after {
border-color:#097b0a
}
.custom-file-input.is-valid:focus~.custom-file-label, .was-validated .custom-file-input:valid:focus~.custom-file-label {
border-color:#097b0a;
box-shadow:0 0 0 1px #097b0a
}
.custom-file-input.is-valid:focus~.custom-file-label:after, .was-validated .custom-file-input:valid:focus~.custom-file-label:after {
border-color:#097b0a
}
.inline-editable {
	position: relative;
	width: 100%
}
.inline-editable:hover .inline-editable-actions {
	display: block
}
.inline-editable-actions {
	position: absolute;
	right: 0;
	top: 0;
	display: none
}
.inline-editable .form-control {
	padding: 0;
	width: inherit;
	height: auto;
	color: inherit;
	background-color: transparent;
	font-size: inherit;
	font-weight: inherit;
	line-height: inherit;
	border: 0;
	border-radius: 0;
	box-shadow: none;
	transition: none;
	resize: none
}
.inline-editable .form-control:focus, .inline-editable .form-control:hover {
	color: #363642;
	box-shadow: 0 0 0 .5rem rgba(20,20,31,.1)
}
.inline-editable .form-control:hover {
	background-color: rgba(20,20,31,.1)
}
.inline-editable .form-control:focus {
	background-color: #fff
}
.inline-editable .form-control:focus+.inline-editable-actions {
	display: block
}

@media (min-width:768px) {
.input-group-lg>.form-control, .input-group-lg>.input-group-append>.btn, .input-group-lg>.input-group-append>.input-group-text, .input-group-lg>.input-group-prepend>.btn, .input-group-lg>.input-group-prepend>.input-group-text {
	font-size: 1rem
}
.input-group-sm>.form-control, .input-group-sm>.input-group-append>.btn, .input-group-sm>.input-group-append>.input-group-text, .input-group-sm>.input-group-prepend>.btn, .input-group-sm>.input-group-prepend>.input-group-text {
	font-size: .8125rem
}
.input-group-text {
	font-size: .875rem
}
}
.input-group:not(.input-group-alt) {
	height: calc(1.5em + .75rem + 2px);
	border: 1px solid #c6c9d5;
	border-radius: .25rem;
	background-color: #fff;
	box-shadow: inset 0 1px 0 0 rgba(34,34,48,.05);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: all .2s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.input-group:not(.input-group-alt) {
	transition: none
}
}
.input-group:not(.input-group-alt).input-group-sm {
	height: calc(1.5em + .5rem + 2px)
}
.input-group:not(.input-group-alt).input-group-lg {
	height: calc(1.75em + 1rem + 2px)
}

@media (min-width:768px) {
.input-group:not(.input-group-alt) {
	height: 2.25rem
}
.input-group:not(.input-group-alt).input-group-sm {
	height: 1.8125rem
}
.input-group:not(.input-group-alt).input-group-lg {
	height: 2.75rem
}
}
.input-group:not(.input-group-alt).focus {
	border-color: <?= $themeColor; ?>;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>;
	z-index: 3
}
.input-group:not(.input-group-alt).focus .input-group-append .badge, .input-group:not(.input-group-alt).focus .input-group-prepend .badge {
	color: #fff;
	background-color: <?= $themeColor; ?>
}
.input-group:not(.input-group-alt).is-valid {
	border-color: #097b0a
}
.input-group:not(.input-group-alt).is-valid .form-control {
	background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"><path fill="%2300A28A" d="M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z"/></svg>')
}
.input-group:not(.input-group-alt).is-valid.focus {
	box-shadow: 0 0 0 1px #097b0a
}
.input-group:not(.input-group-alt).is-valid.focus .input-group-append .badge, .input-group:not(.input-group-alt).is-valid.focus .input-group-prepend .badge {
	color: #fff;
	background-color: #097b0a
}
.input-group:not(.input-group-alt).is-invalid {
	border-color: #ff0538
}
.input-group:not(.input-group-alt).is-invalid .form-control {
	background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" stroke="%23B76BA3"><circle cx="6" cy="6" r="4.5"/><path stroke-linejoin="round" d="M5.8 3.6h.4L6 6.5z"/><circle cx="6" cy="8.2" r=".6" fill="%23B76BA3" stroke="none"/></svg>')
}
.input-group:not(.input-group-alt).is-invalid.focus {
	box-shadow: 0 0 0 1px #ff0538
}
.input-group:not(.input-group-alt).is-invalid.focus .input-group-append .badge, .input-group:not(.input-group-alt).is-invalid.focus .input-group-prepend .badge {
	color: #fff;
	background-color: #ff0538
}
.input-group:not(.input-group-alt).is-invalid .form-control, .input-group:not(.input-group-alt).is-valid .form-control {
	background-repeat: no-repeat;
	background-position: calc(100% - .75rem) calc(.375em + .1875rem + 2px)!important;
	background-size: calc(.75em + .375rem) calc(.75em + .375rem)
}
.input-group:not(.input-group-alt).is-invalid+.invalid-feedback, .input-group:not(.input-group-alt).is-invalid+.invalid-tooltip, .input-group:not(.input-group-alt).is-invalid+.valid-feedback, .input-group:not(.input-group-alt).is-invalid+.valid-tooltip, .input-group:not(.input-group-alt).is-valid+.invalid-feedback, .input-group:not(.input-group-alt).is-valid+.invalid-tooltip, .input-group:not(.input-group-alt).is-valid+.valid-feedback, .input-group:not(.input-group-alt).is-valid+.valid-tooltip {
	display: block
}
.input-group:not(.input-group-alt) .form-control, .input-group:not(.input-group-alt) .input-group-text {
	border: 0;
	background-color: transparent;
	box-shadow: none
}
.input-group:not(.input-group-alt) .form-control {
	top: -1px;
	height: inherit
}
.input-group:not(.input-group-alt) .form-control.focus, .input-group:not(.input-group-alt) .form-control:focus {
	box-shadow: none
}
.input-group:not(.input-group-alt) .input-group-prepend .input-group-text {
	padding-right: 1px
}
.input-group:not(.input-group-alt) .input-group-prepend .badge {
	margin-left: .375rem
}
.input-group:not(.input-group-alt) .input-group-prepend .spinner-border, .input-group:not(.input-group-alt) .input-group-prepend .spinner-grow {
	margin-left: .75rem
}
.input-group:not(.input-group-alt) .input-group-append .input-group-text {
	padding-left: 1px
}
.input-group:not(.input-group-alt) .input-group-append .badge {
	margin-right: .375rem
}
.input-group:not(.input-group-alt) .input-group-append .spinner-border, .input-group:not(.input-group-alt) .input-group-append .spinner-grow {
	margin-right: .75rem
}
.input-group:not(.input-group-alt) .input-group-append .btn, .input-group:not(.input-group-alt) .input-group-prepend .btn {
	height: calc(100% - 2px);
	border: 0
}
.input-group:not(.input-group-alt) .input-group-append .spinner-border, .input-group:not(.input-group-alt) .input-group-append .spinner-grow, .input-group:not(.input-group-alt) .input-group-prepend .spinner-border, .input-group:not(.input-group-alt) .input-group-prepend .spinner-grow {
	align-self: center
}
.input-group:not(.input-group-alt) .input-group-append .badge, .input-group:not(.input-group-alt) .input-group-prepend .badge {
	padding: .25rem .5rem;
	align-self: center;
	font-size: inherit;
	color: #888c9b;
	font-weight: 400;
	background: #e6e8ed;
	transition: all .15s
}
.input-group:not(.input-group-alt).input-group-sm {
	border-radius: .2rem
}
.input-group:not(.input-group-alt).input-group-lg {
	border-radius: .3rem
}
.input-group:not(.input-group-alt) .invalid-feedback, .input-group:not(.input-group-alt) .valid-feedback {
	margin-left: .75rem;
	margin-top: -.375rem;
	margin-bottom: .25rem
}
.input-group-alt .input-group-text {
	color: #363642;
	box-shadow: none
}
.input-group-plaintext, .input-group-plaintext.focus, .input-group-plaintext .form-control, .input-group-plaintext .form-control:focus, .input-group-plaintext .input-group-append, .input-group-plaintext .input-group-prepend {
	background-color: transparent!important;
	border-color: transparent!important;
	box-shadow: none!important
}
.input-group-plaintext .input-group-append>.input-group-text, .input-group-plaintext .input-group-prepend>.input-group-text {
	padding-right: 0;
	padding-left: 0
}
.input-group-alt>.input-group {
	position: relative;
	flex: 1 1 auto;
	width: 1%;
	margin-bottom: 0
}
.input-group-alt>.input-group:first-child {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0
}
.input-group-alt>.input-group:last-child {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0
}
.input-group-alt>.input-group:not(:first-child):not(:last-child) {
	border-radius: 0
}
.input-group-alt>.input-group .form-control {
	height: 2.25rem
}

@media (min-width:768px) {
.input-group-alt>.input-group .form-control {
	height: calc(2.25rem - 2px)
}
}
.input-group-alt>.input-group .form-control.form-control-sm {
	height: 1.8125rem
}

@media (min-width:768px) {
.input-group-alt>.input-group .form-control.form-control-sm {
	height: calc(1.8125rem - 2px)
}
}
.input-group-alt>.input-group .form-control.form-control-lg {
	height: 2.75rem
}

@media (min-width:768px) {
.input-group-alt>.input-group .form-control.form-control-lg {
	height: calc(2.75rem - 2px)
}
}
.input-group-append .custom-select, .input-group-prepend .custom-select {
	position: relative;
	z-index: 2
}
.input-group-append .btn:focus, .input-group-prepend .btn:focus {
	z-index: 3
}
.input-group>.input-group-append:last-child>.custom-select:not(:last-child), .input-group>.input-group-append:not(:last-child)>.custom-select, .input-group>.input-group-prepend>.custom-select {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0
}
.input-group>.input-group-append>.custom-select, .input-group>.input-group-prepend:first-child>.custom-select:not(:first-child), .input-group>.input-group-prepend:not(:first-child)>.custom-select {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0
}
.input-group-text {
	color: #888c9b;
	box-shadow: inset 0 1px 0 0 rgba(34,34,48,.05)
}
.input-group-text>.oi {
	top: 0
}
.has-spinner {
	position: relative
}
.has-spinner .spinner-border, .has-spinner .spinner-grow {
	position: absolute;
	top: .125rem;
	right: .75rem;
	opacity: 0
}
.has-spinner .spinner-border.show, .has-spinner .spinner-grow.show {
	opacity: 1
}
.has-spinner .spinner-border.show~.close, .has-spinner .spinner-border.show~.input-group-append, .has-spinner .spinner-grow.show~.close, .has-spinner .spinner-grow.show~.input-group-append {
	display: none
}
.has-spinner .spinner-border-sm, .has-spinner .spinner-grow-sm {
	top: .6875rem
}
.has-spinner.form-label-group .spinner-border, .has-spinner.form-label-group .spinner-grow {
	top: .5rem
}
.has-spinner.form-label-group .spinner-border-sm, .has-spinner.form-label-group .spinner-grow-sm {
	top: 1rem
}
.has-clearable {
	position: relative
}
.has-clearable.input-group>.close.show~.input-group-append {
	margin-right: 1.875rem
}
.has-clearable .form-control {
	padding-right: 30px
}
.has-clearable .close {
	display: none;
	margin: 0;
	position: absolute;
	top: 50%;
	right: 0;
	padding: .375rem .75rem;
	font-size: 1rem;
	line-height: 1;
	color: #888c9b;
	z-index: 4;
	transform: translate3d(0, -50%, 0)
}
.has-clearable .close:hover {
	color: #363642
}
.has-clearable .close.show {
	display: block
}
.has-clearable.has-spinner .close, .has-clearable.has-spinner .close.show {
	display: none
}
.has-clearable .close.show~.form-control.is-invalid, .has-clearable .close.show~.form-control.is-valid, .was-validated .has-clearable .close.show~.form-control:invalid, .was-validated .has-clearable .close.show~.form-control:valid {
background-position:calc(100% - 2.25rem) calc(.375em + .1875rem)
}
.form-label-group.has-clearable>.close.show~.form-control.is-invalid, .form-label-group.has-clearable>.close.show~.form-control.is-valid, .was-validated .form-label-group.has-clearable>.close.show~.form-control:invalid, .was-validated .form-label-group.has-clearable>.close.show~.form-control:valid {
background-position:calc(100% - 2.25rem) calc(.75em + .1875rem)
}
.custom-control-hint {
	margin: 1rem 0;
	display: none
}
.custom-control-input:checked~.custom-control-hint {
	display: block
}
.custom-control:not(.custom-switch) .custom-control-label:after, .custom-control:not(.custom-switch) .custom-control-label:before {
	top: .125rem
}
.macos .custom-control:not(.custom-switch) .custom-control-label:after, .macos .custom-control:not(.custom-switch) .custom-control-label:before {
	top: .25em
}

@media (min-width:768px) {
.custom-control:not(.custom-switch) .custom-control-label:after, .custom-control:not(.custom-switch) .custom-control-label:before {
	top: .0625rem
}
.macos .custom-control:not(.custom-switch) .custom-control-label:after, .macos .custom-control:not(.custom-switch) .custom-control-label:before {
	top: .125rem
}
}
.custom-control:not(.custom-switch) .custom-control-label:before {
	background: linear-gradient(180deg, #fff, #f6f7f9);
	border: 1px solid #c6c9d5;
	box-shadow: 0 1px 0 0 rgba(34,34,48,.05);
	pointer-events: auto;
	-webkit-user-select: auto;
	-moz-user-select: auto;
	-ms-user-select: auto;
	user-select: auto
}
.custom-control:not(.custom-switch) .custom-control-label:after {
	transform: scale(0);
	transition: transform .2s ease;
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.custom-control:not(.custom-switch) .custom-control-label-media:after, .custom-control:not(.custom-switch) .custom-control-label-media:before {
	top: .5rem!important
}
.custom-control:not(.custom-switch) .custom-control-label-media .media {
	align-items: center;
	line-height: 1.2
}
.custom-control-input {
	left: 0;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden
}
.custom-control-input:checked~.custom-control-label:before {
	border-color: <?= $themeColor; ?>
}
.custom-control-input:checked~.custom-control-label:after {
	transform: scale(1)
}
.custom-control-input:focus~.custom-control-label:before {
	border-color: <?= $themeColor; ?>
}
.custom-control-input:disabled~.custom-control-label:before {
	background: #f6f7f9
}
.custom-control-nolabel {
	margin: 0 0 0 -.125rem;
	padding-left: 0
}
.custom-control-nolabel>.custom-control-label {
	width: 1.25rem;
	height: 1.25rem;
	color: transparent;
	overflow: hidden;
	white-space: nowrap;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.custom-control-nolabel>.custom-control-label:after, .custom-control-nolabel>.custom-control-label:before {
	left: .125rem
}
.custom-checkbox .custom-control-label:after {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%230179A8' width='8' height='8'%3E%3Cpath d='M6.41 1l-.69.72L2.94 4.5l-.81-.78L1.41 3 0 4.41l.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 1z'/%3E%3C/svg%3E");
	background: no-repeat 51%/63% 63%
}
.custom-checkbox .custom-control-input:indeterminate~.custom-control-label:after {
	transform: scale(1)
}
.custom-radio .custom-control-label:after {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%230179A8' width='8' height='8'%3E%3Cpath d='M4 1C2.34 1 1 2.34 1 4s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z'/%3E%3C/svg%3E");
	background: no-repeat 51%/63% 63%
}
.custom-number {
	position: relative;
	display: flex
}
.custom-number>.form-control[type=number] {
	flex: 1 1 auto;
	padding-right: 2.25rem;
	-moz-appearance: textfield
}
.custom-number>.form-control[type=number]::-webkit-inner-spin-button, .custom-number>.form-control[type=number]::-webkit-outer-spin-button {
margin:0;
-webkit-appearance:none
}
.custom-number>.form-control[type=number].form-control-sm {
	padding-right: 2rem
}
.custom-number>.form-control[type=number].form-control-lg {
	padding-right: 2.5rem
}
.custom-number-controls {
	position: absolute;
	right: 1px;
	width: 1.5rem;
	height: 100%
}
.custom-number-btn {
	position: absolute;
	right: 0;
	cursor: pointer;
	border-left: 1px solid #c6c9d5;
	width: 100%;
	background-color: #fff;
	line-height: 1.1;
	text-align: center;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.custom-number-btn:hover {
	color: <?= $themeColor; ?>
}
.custom-number-btn.focus, .custom-number-btn:active, .custom-number-btn:focus {
	color: #2e609c;
	background-color: rgba(52,108,176,.08)
}
.custom-number-btn.custom-number-up {
	top: 1px;
	height: calc(50% - 1px);
	border-bottom: 1px solid #c6c9d5;
	border-top-right-radius: .25rem
}
.custom-number-btn.custom-number-down {
	bottom: 1px;
	height: calc(50% - 1px);
	border-bottom-right-radius: .25rem
}

@media (min-width:768px) {
.custom-select {
	height: 2.25rem;
	font-size: .875rem
}
.custom-select.custom-select-sm {
	height: 1.8125rem;
	font-size: .8125rem
}
.custom-select.custom-select-lg {
	height: 2.75rem;
	font-size: 1rem
}
}
.custom-select {
	background: url("data:image/svg+xml;charset=utf-8,%3Csvg width='14' height='14' fill='%23888c9b' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19L403 749q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z'/%3E%3C/svg%3E") no-repeat right .75rem center, linear-gradient(180deg, #fff, #f6f7f9);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: all .2s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
.custom-select {
	transition: none
}
}

@media (min-width:768px) {
.custom-select {
	height: 2.25rem
}
}
.custom-select-reflow {
	color: #888c9b
}
.custom-select-reflow, .custom-select-reflow:focus {
	background: url("data:image/svg+xml;charset=utf-8,%3Csvg width='14' height='14' fill='%23888c9b' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19L403 749q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z'/%3E%3C/svg%3E") no-repeat right .75rem center;
	border-color: transparent;
	box-shadow: none
}
.custom-select-reflow:active, .custom-select-reflow:focus, .custom-select-reflow:hover {
	color: #363642
}
.custom-select.disabled {
	color: #888c9b;
	background-color: #e6e8ed
}
.custom-select-sm {
	padding: .25rem .5rem;
	font-size: .875rem
}

@media (min-width:768px) {
.custom-select-sm {
	height: 1.8125rem;
	font-size: .8125rem
}
}
.custom-select-lg {
	padding: .5rem 1rem;
	font-size: 1.25rem
}

@media (min-width:768px) {
.custom-select-lg {
	height: 2.75rem;
	font-size: 1rem
}
}
.custom-select.is-valid, .was-validated .custom-select:valid {
background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='14' height='14' fill='%23888c9b' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19L403 749q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z'/%3E%3C/svg%3E") no-repeat right .75rem center, url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"><path fill="%2300A28A" d="M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z"/></svg>') no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem), linear-gradient(180deg, #fff, #f6f7f9)
}
.custom-select.is-invalid, .was-validated .custom-select:invalid {
background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='14' height='14' fill='%23888c9b' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19L403 749q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z'/%3E%3C/svg%3E") no-repeat right .75rem center, url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" stroke="%23B76BA3"><circle cx="6" cy="6" r="4.5"/><path stroke-linejoin="round" d="M5.8 3.6h.4L6 6.5z"/><circle cx="6" cy="8.2" r=".6" fill="%23B76BA3" stroke="none"/></svg>') no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem), linear-gradient(180deg, #fff, #f6f7f9)
}

@media (min-width:768px) {
.custom-file, .custom-file .custom-file-input, .custom-file .custom-file-label, .custom-file .custom-file-label:after {
	height: 2.25rem
}
}
.custom-file-sm, .custom-file-sm .custom-file-input, .custom-file-sm .custom-file-label, .custom-file-sm .custom-file-label:after {
	padding: .25rem .5rem;
	font-size: .875rem
}

@media (min-width:768px) {
.custom-file-sm, .custom-file-sm .custom-file-input, .custom-file-sm .custom-file-label, .custom-file-sm .custom-file-label:after {
	height: 1.8125rem;
	font-size: .8125rem
}
}
.custom-file-lg, .custom-file-lg .custom-file-input, .custom-file-lg .custom-file-label, .custom-file-lg .custom-file-label:after {
	padding: .5rem 1rem;
	font-size: 1.25rem
}

@media (min-width:768px) {
.custom-file-lg, .custom-file-lg .custom-file-input, .custom-file-lg .custom-file-label, .custom-file-lg .custom-file-label:after {
	height: 2.75rem;
	font-size: 1rem
}
}
.custom-file-input {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden
}
.custom-file-input:focus~.custom-file-label {
	border-color: <?= $themeColor; ?>;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.custom-file-input:focus~.custom-file-label:after {
	border-color: <?= $themeColor; ?>
}
.custom-file-label {
	box-shadow: inset 0 1px 0 0 rgba(34,34,48,.05);
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}
.custom-file-label:after {
	background: linear-gradient(180deg, #fff, #f6f7f9)
}
.list-group {
	border: 0;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.list-group-flush, .list-group-reflow {
	box-shadow: none
}
.list-group-reflow .list-group-header, .list-group-reflow .list-group-item {
	background-color: transparent
}
.list-group-fluid .list-group-item {
	padding-right: 0;
	padding-left: 0
}
.list-group-header {
	margin: 0;
	padding: .75rem 1rem;
	display: flex;
	font-size: .75rem;
	font-weight: 600;
	color: #888c9b;
	background-color: #fff
}
.list-group-header:not(:first-child) {
	margin-top: 1px;
	border-top: 1px solid #ecedf1
}
.list-group-header+.list-group-item .list-group-item-body, .list-group-header+.list-group-item .list-group-item-figure {
	border-top-color: transparent!important
}
.list-group-item {
	display: flex;
	align-items: stretch;
	border-width: 1px 0;
	border-color: transparent;
	outline: 0
}
.list-group-item:first-child {
	border-width: 0 0 1px
}
.list-group-item:last-child {
	border-width: 0
}
.list-group-item.active {
	color: #363642;
	border-color: transparent;
	border-radius: 0!important;
	box-shadow: inset 4px 0 0 0 <?= $themeColor; ?>
}
.list-group-item.active .list-group-item-figure {
	color: <?= $themeColor; ?>
}
.list-group-item.active .list-group-item-text {
	color: #363642
}
.list-group-item.active:focus .list-group-item-figure, .list-group-item.active:hover .list-group-item-figure {
	color: <?= $themeColor; ?>
}
.list-group-item-action:focus .list-group-item-figure, .list-group-item-action:hover .list-group-item-figure {
	color: #888c9b
}
.list-group-item-action:focus .list-group-item-text, .list-group-item-action:hover .list-group-item-text {
	color: #363642
}
.list-group-item-figure {
	display: flex;
	align-items: center;
	color: #a6abbd
}
.list-group-item-figure:first-child {
	padding-right: 1rem
}
.list-group-item-figure:last-child {
	padding-left: 1rem
}
.list-group-item-body {
	flex: 1;
	min-width: 0;
	align-self: center;
	font-size: .875rem
}
.list-group-item-title {
	font-size: 1rem
}
.list-group-item-subtitle, .list-group-item-title {
	margin: 0;
	line-height: 1.25rem;
	font-weight: 400;
	color: #363642
}
.list-group-item-subtitle {
	font-size: inherit
}
.list-group-item-subtitle>a, .list-group-item-title>a, a.list-group-item-subtitle, a.list-group-item-title {
	color: #222230
}
.list-group-item-subtitle>a:focus, .list-group-item-subtitle>a:hover, .list-group-item-title>a:focus, .list-group-item-title>a:hover, a.list-group-item-subtitle:focus, a.list-group-item-subtitle:hover, a.list-group-item-title:focus, a.list-group-item-title:hover {
	color: #363642;
	text-decoration: none
}
.list-group-item-text {
	margin-bottom: 0;
	line-height: 1.25rem;
	color: #888c9b
}
.list-group-item.custom-control .custom-control-label {
	width: 100%
}
.list-group-item.custom-control .custom-control-label:after, .list-group-item.custom-control .custom-control-label:before {
	top: .125rem;
	right: .125rem;
	left: auto
}
.list-group-item.custom-select {
	height: auto;
	box-shadow: none;
	border-radius: 0
}
.list-group-item.custom-select:focus {
	box-shadow: none
}
.list-group-item-danger, .list-group-item-dark, .list-group-item-info, .list-group-item-light, .list-group-item-primary, .list-group-item-secondary, .list-group-item-success, .list-group-item-warning {
	color: #363642;
	background-color: #fff;
	border-color: #ecedf1;
	border-radius: 0!important
}
.list-group-item-danger.list-group-item-action, .list-group-item-dark.list-group-item-action, .list-group-item-info.list-group-item-action, .list-group-item-light.list-group-item-action, .list-group-item-primary.list-group-item-action, .list-group-item-secondary.list-group-item-action, .list-group-item-success.list-group-item-action, .list-group-item-warning.list-group-item-action {
	color: #363642
}
.list-group-item-danger.list-group-item-action:focus, .list-group-item-danger.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus, .list-group-item-dark.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus, .list-group-item-info.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus, .list-group-item-light.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus, .list-group-item-primary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus, .list-group-item-secondary.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus, .list-group-item-success.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus, .list-group-item-warning.list-group-item-action:hover {
	color: #363642;
	background-color: #f6f7f9
}
.list-group-item-danger.list-group-item-action.active, .list-group-item-dark.list-group-item-action.active, .list-group-item-info.list-group-item-action.active, .list-group-item-light.list-group-item-action.active, .list-group-item-primary.list-group-item-action.active, .list-group-item-secondary.list-group-item-action.active, .list-group-item-success.list-group-item-action.active, .list-group-item-warning.list-group-item-action.active {
	border-color: #ecedf1;
	border-radius: 0!important;
	box-shadow: inset 4px 0 0 0 <?= $themeColor; ?>
}
.list-group-item-primary {
	box-shadow: inset 4px 0 0 0 <?= $themeColor; ?>
}
.list-group-item-secondary {
	box-shadow: inset 4px 0 0 0 #f6f7f9
}
.list-group-item-success {
	box-shadow: inset 4px 0 0 0 #097b0a
}
.list-group-item-info {
	box-shadow: inset 4px 0 0 0 #0179a8
}
.list-group-item-warning {
	box-shadow: inset 4px 0 0 0 #f7c46c
}
.list-group-item-danger {
	box-shadow: inset 4px 0 0 0 #ff0538
}
.list-group-item-light {
	box-shadow: inset 4px 0 0 0 #f6f7f9
}
.list-group-item-dark {
	box-shadow: inset 4px 0 0 0 #222230
}
.list-group-bordered .list-group-header {
	border-top: 0
}
.list-group-bordered .list-group-item {
	border-color: #ecedf1
}
.list-group-divider .list-group-item {
	margin-top: 0;
	padding: 0;
	border-bottom: 0
}
.list-group-divider .list-group-item.active {
	border-color: transparent
}
.list-group-divider .list-group-item:not(:first-child)>.list-group-item-body, .list-group-divider .list-group-item:not(:first-child)>.list-group-item-figure:last-child {
	border-top: 1px solid #ecedf1
}
.list-group-divider .list-group-item-figure {
	padding: .75rem 1rem
}
.list-group-divider .list-group-item-body {
	padding: .75rem 0
}
.list-group-divider .list-group-item-body:first-child {
	padding-left: 1rem
}
.list-group-divider .list-group-item-body:last-child {
	padding-right: 1rem
}
.list-group-media {
	background-color: transparent;
	box-shadow: none;
	border-radius: 0
}
.list-group-media .list-group-item {
	margin-bottom: 0;
	padding: 0;
	border: 0;
	background-color: #fff;
	border-radius: .25rem;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.list-group-media .list-group-item:not(:first-child) {
	margin-top: 1rem
}
.list-group-media .list-group-item-action:focus, .list-group-media .list-group-item-action:hover {
	background-color: #fff
}
.list-group-media .list-group-item-figure {
	position: relative;
	padding: 0;
	width: 12rem;
	max-width: 40%;
	overflow: hidden
}
.list-group-media .list-group-item-figure>img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	min-height: 100%;
	-o-object-fit: cover;
	object-fit: cover;
	-o-object-position: center;
	object-position: center
}
.list-group-media .list-group-item-body {
	padding: 1.5rem 1rem
}
.list-group-media .list-group-item-title {
	margin-bottom: .5rem;
	font-weight: 700
}
.card-deck {
	display: block;
	display: flex;
	flex-flow: row wrap;
	margin-right: -10px;
	margin-left: -10px
}
.card-deck .card {
	display: flex;
	flex: 1 0 0%;
	flex-direction: column;
	margin-right: 10px;
	margin-left: 10px
}
.card-deck-sm {
	display: block
}

@media (min-width:576px) {
.card-deck-sm {
	display: flex;
	flex-flow: row wrap;
	margin-right: -10px;
	margin-left: -10px
}
.card-deck-sm .card {
	display: flex;
	flex: 1 0 0%;
	flex-direction: column;
	margin-right: 10px;
	margin-left: 10px
}
}
.card-deck-md {
	display: block
}

@media (min-width:768px) {
.card-deck-md {
	display: flex;
	flex-flow: row wrap;
	margin-right: -10px;
	margin-left: -10px
}
.card-deck-md .card {
	display: flex;
	flex: 1 0 0%;
	flex-direction: column;
	margin-right: 10px;
	margin-left: 10px
}
}
.card-deck-lg {
	display: block
}

@media (min-width:992px) {
.card-deck-lg {
	display: flex;
	flex-flow: row wrap;
	margin-right: -10px;
	margin-left: -10px
}
.card-deck-lg .card {
	display: flex;
	flex: 1 0 0%;
	flex-direction: column;
	margin-right: 10px;
	margin-left: 10px
}
}
.card-deck-xl {
	display: block
}

@media (min-width:1200px) {
.card-deck-xl {
	display: flex;
	flex-flow: row wrap;
	margin-right: -10px;
	margin-left: -10px
}
.card-deck-xl .card {
	display: flex;
	flex: 1 0 0%;
	flex-direction: column;
	margin-right: 10px;
	margin-left: 10px
}
}
.card {
	margin-bottom: 20px;
	border: none;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}

@media (max-width:575.98px) {
.card-fluid {
	border-radius: 0;
	border-width: 1px 0
}
.card-fluid .card-img-top {
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.card-fluid .card-img-bottom {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0
}
}
.card-reflow {
	margin-bottom: 0;
	display: block;
	background-color: transparent;
	box-shadow: none
}
.card-header-tabs {
	margin-top: -1rem;
	font-weight: 400
}
.card-header-control, .card-title-control {
	margin: -.5rem 0
}
.card-header {
	font-weight: 600
}
.card-header-fluid {
	padding-bottom: 0;
	border-bottom: 0
}
.card-title {
	font-size: 1rem
}
.card-title>a {
	color: inherit;
	outline: 0
}
.card-title>a:focus, .card-title>a:hover {
	color: inherit;
	text-decoration: none
}
.card-subtitle {
	margin-top: -.75rem;
	font-size: .875rem;
	font-weight: 400
}

@media (min-width:768px) {
.card-subtitle {
	font-size: .75rem
}
}
.card-footer {
	padding: 0;
	display: flex;
	align-items: stretch
}
.card-footer-content {
	padding: 1rem;
	width: 100%
}
.card-footer-item {
	padding: 1rem;
	flex: 1;
	text-align: center;
	outline: 0
}
.card-footer-item:focus, .card-footer-item:hover {
	text-decoration: none
}
.card-footer-item-bordered:not(:last-child) {
	border-right: 1px solid rgba(20,20,31,.12)
}
.card-footer-item>.metric {
	padding: 0
}
a.card-footer-item.text-muted:focus, a.card-footer-item.text-muted:hover {
	color: #222230!important
}
.card-link+.card-link {
	margin-left: 0
}
.card-expansion {
	margin-bottom: 1rem
}
.card-expansion-item {
	margin-bottom: 0;
	border-radius: 0;
	transition: margin .2s
}
.card-expansion-item.expanded {
	margin: 1rem 0
}
.card-expansion-item:first-child {
	border-top-left-radius: .25rem;
	border-top-right-radius: .25rem
}
.card-expansion-item:first-child.expanded {
	margin-top: 0
}
.card-expansion-item:last-child {
	border-bottom-right-radius: .25rem;
	border-bottom-left-radius: .25rem
}
.card-expansion-item:last-child.expanded {
	margin-bottom: 0
}
.card-expansion-item:not(.expanded)+.card-expansion-item:not(.expanded) {
	margin-top: -1px
}
[data-toggle=collapse] .collapse-indicator {
	text-align: left;
	color: #888c9b
}
[data-toggle=collapse] .collapse-indicator>.fa, [data-toggle=collapse] .collapse-indicator>.oi {
	transform: rotate(0deg);
	transition: transform .2s
}
[data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-plus:before {
	content: "\f068"
}
[data-toggle=collapse][aria-expanded=true] .collapse-indicator>.oi-plus:before {
	content: "\e09d"
}
[data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-angle-down, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-caret-down, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-chevron-down, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.oi-caret-down, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.oi-chevron-down {
	transform: rotate(-180deg)
}
[data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-angle-left, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-caret-left, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-chevron-left, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.oi-caret-left, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.oi-chevron-left {
	transform: rotate(-90deg)
}
[data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-angle-right, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-caret-right, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-chevron-right, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.oi-caret-right, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.oi-chevron-right {
	transform: rotate(90deg)
}
[data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-circle, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-dot-circle {
	color: <?= $themeColor; ?>
}
[data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-circle:before, [data-toggle=collapse][aria-expanded=true] .collapse-indicator>.fa-dot-circle:before {
	content: "\f192"
}
.card-inverse {
	color: hsla(0,0%,100%,.6)
}
.card-inverse .card-footer, .card-inverse .card-header {
	background-color: transparent;
	border-color: hsla(0,0%,100%,.2)
}
.card-inverse .card-blockquote, .card-inverse .card-footer, .card-inverse .card-header, .card-inverse .card-title {
	color: hsla(0,0%,100%,.8)
}
.card-inverse .card-footer-item-bordered {
	border-color: hsla(0,0%,100%,.2)
}
.card-inverse .card-blockquote .blockquote-footer, .card-inverse .card-link, .card-inverse .card-subtitle, .card-inverse .card-text {
	color: hsla(0,0%,100%,.6)
}
.card-inverse .card-link:focus, .card-inverse .card-link:hover {
	color: hsla(0,0%,100%,.8)
}
.dropdown-menu {
	margin-top: 10px;
	border: 0;
	font-weight: 400;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16);
	-webkit-animation-duration: .2s;
	animation-duration: .2s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both
}
.dropdown-menu[x-placement=top-end], .dropdown-menu[x-placement=top-start] {
	margin-top: auto;
	margin-bottom: 10px
}
.dropdown-menu[x-placement=right-end], .dropdown-menu[x-placement=right-start] {
	margin-top: auto;
	margin-left: 10px
}
.dropdown-menu[x-placement=left-end], .dropdown-menu[x-placement=left-start] {
	margin-top: auto;
	margin-right: 10px
}

@media (min-width:768px) {
.dropdown-menu {
	font-size: .875rem
}
}
.dropdown-menu.show {
	-webkit-animation-name: showDropdown;
	animation-name: showDropdown
}
.dropdown-menu-rich {
	width: 20rem
}
.dropdown-menu-md {
	width: 18rem
}
.dropdown-menu-lg {
	width: 24rem
}
.dropdown-menu-xl {
	width: 30rem
}
.dropdown-menu .dropdown-toggle:after {
	margin-left: auto
}
.dropdown-header {
	display: flex;
	justify-content: space-between;
	align-items: center
}
.dropdown-header>a, .dropdown-header>a:focus, .dropdown-header>a:hover {
	font-weight: 400;
	font-size: .75rem;
	color: #888c9b
}
.dropdown-icon {
	margin-right: .25rem;
	color: #a6abbd;
	width: 1.25rem
}
.dropdown-item.active .date, .dropdown-item.active .dropdown-icon, .dropdown-item.active .subject, .dropdown-item.active .text, .dropdown-item.active .text-muted, .dropdown-item.active.unread .subject, .dropdown-item.active.unread .text, .dropdown-item.focus .date, .dropdown-item.focus .dropdown-icon, .dropdown-item.focus .subject, .dropdown-item.focus .text, .dropdown-item.focus .text-muted, .dropdown-item.focus.unread .subject, .dropdown-item.focus.unread .text, .dropdown-item:active .date, .dropdown-item:active .dropdown-icon, .dropdown-item:active .subject, .dropdown-item:active .text, .dropdown-item:active .text-muted, .dropdown-item:active.unread .subject, .dropdown-item:active.unread .text, .dropdown-item:focus .date, .dropdown-item:focus .dropdown-icon, .dropdown-item:focus .subject, .dropdown-item:focus .text, .dropdown-item:focus .text-muted, .dropdown-item:focus.unread .subject, .dropdown-item:focus.unread .text, .dropdown-item:hover .date, .dropdown-item:hover .dropdown-icon, .dropdown-item:hover .subject, .dropdown-item:hover .text, .dropdown-item:hover .text-muted, .dropdown-item:hover.unread .subject, .dropdown-item:hover.unread .text {
	color: inherit
}
.dropdown-item.active .text-muted, .dropdown-item.focus .text-muted, .dropdown-item:active .text-muted, .dropdown-item:focus .text-muted, .dropdown-item:hover .text-muted {
	opacity: .87
}
.dropdown-item.unread .subject, .dropdown-item.unread .text {
	font-weight: 600;
	color: #363642
}
.dropdown-item .date, .dropdown-item .subject, .dropdown-item .text {
	margin-bottom: 0;
	line-height: 1.4
}
.dropdown-item .subject {
	font-size: .75rem;
	color: #222230
}
.dropdown-item .text {
	font-size: .875rem;
	color: #222230
}
.dropdown-item .date {
	font-size: .75rem;
	color: #888c9b
}
.dropdown-arrow {
	top: 0;
	overflow: hidden;
	height: 1.25rem;
	width: 1.25rem;
	z-index: 1001;
	transform: translate3d(0, -100%, 0)
}
.dropdown-arrow, .dropdown-arrow:before {
	display: block;
	position: absolute;
	left: .5rem;
	pointer-events: none
}
.dropdown-arrow:before {
	content: "";
	bottom: -.375rem;
	transform: rotate(45deg);
	height: .75rem;
	width: .75rem;
	margin-left: -5px;
	background-color: hsla(0,0%,100%,.98);
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16)
}
[x-placement=top-end]>.dropdown-arrow, [x-placement=top-start]>.dropdown-arrow {
	top: auto;
	bottom: 0;
	transform: translate3d(0, 100%, 0)
}
[x-placement=top-end]>.dropdown-arrow:before, [x-placement=top-start]>.dropdown-arrow:before {
	top: -.375rem;
	bottom: auto
}
[x-placement=right-start]>.dropdown-arrow {
	top: .5rem;
	left: 0;
	transform: translate3d(-100%, 0, 0)
}
[x-placement=right-start]>.dropdown-arrow:before {
	bottom: .375rem;
	right: 0;
	left: auto;
	margin-right: -.375rem;
	margin-left: auto
}
[x-placement=left-start]>.dropdown-arrow {
	top: .5rem;
	right: 0;
	left: auto;
	transform: translate3d(100%, 0, 0)
}
[x-placement=left-start]>.dropdown-arrow:before {
	bottom: .375rem;
	left: 0;
	margin-left: -.375rem
}
.dropdown-arrow-right, .dropdown-menu-right>.dropdown-arrow {
	left: auto;
	right: .5rem
}
.dropdown-arrow-left {
	left: .5rem
}
.dropdown-sheets {
	padding: 1.5rem 0 0;
	display: flex;
	flex-flow: row wrap
}
.dropdown-sheets .dropdown-sheet-item {
	margin-bottom: 1.5rem;
	color: #888c9b;
	width: 33.33333%;
	text-align: center
}
.dropdown-sheets .dropdown-sheet-item:focus, .dropdown-sheets .dropdown-sheet-item:hover {
	text-decoration: none
}
.dropdown-menu-rich {
	padding: 0
}
.dropdown-menu-rich .dropdown-header {
	padding-top: .75rem;
	padding-bottom: .75rem;
	border-bottom: 1px solid rgba(34,34,48,.1)
}
.dropdown-menu-rich .dropdown-item {
	padding-top: .75rem;
	padding-bottom: .75rem;
	display: flex;
	align-items: flex-start
}
.dropdown-menu-rich .dropdown-item:not(:first-child) {
	border-top: 1px solid rgba(34,34,48,.1)
}
.dropdown-menu-rich .dropdown-item-body {
	flex: 1;
	white-space: normal;
	min-width: 0
}
.dropdown-menu-rich .dropdown-item-body:not(:first-child) {
	padding-left: 1rem
}
.dropdown-menu-rich .dropdown-item-body:not(:last-child) {
	padding-right: 1rem
}
.dropdown-menu-rich .dropdown-icon {
	margin-right: 0
}
.dropdown-scroll {
	position: relative;
	overflow-y: auto;
	height: 263px
}
.dropdown-footer {
	margin: 0;
	display: block;
	padding: .75rem 1rem;
	font-size: .875rem;
	text-align: center;
	border-top: 1px solid rgba(34,34,48,.1);
	border-bottom-right-radius: .25rem;
	border-bottom-left-radius: .25rem
}
.dropdown-footer:focus, .dropdown-footer:hover {
	text-decoration: none;
	background-color: #f6f7f9
}
@-webkit-keyframes showDropdown {
0% {
opacity:0;
transform:scale(.8)
}
to {
opacity:1;
transform:scale(1)
}
}
@keyframes showDropdown {
0% {
opacity:0;
transform:scale(.8)
}
to {
opacity:1;
transform:scale(1)
}
}
.dropdown-menu>.custom-control, .dropdown-scroll>.custom-control {
	margin-bottom: 0;
	padding: .5rem 1rem .5rem 1.5rem
}
.dropdown-menu>.custom-control .custom-control-label, .dropdown-scroll>.custom-control .custom-control-label {
	display: block;
	cursor: pointer
}
.dropdown-menu>.custom-control .custom-control-label:after, .dropdown-menu>.custom-control .custom-control-label:before, .dropdown-scroll>.custom-control .custom-control-label:after, .dropdown-scroll>.custom-control .custom-control-label:before {
	left: -1.25rem
}
.dropdown-menu>.custom-control .custom-control-label:before, .dropdown-scroll>.custom-control .custom-control-label:before {
	border: none;
	background: transparent!important;
	box-shadow: none
}
.dropdown-menu>.custom-control .custom-control-input:checked~.custom-control-label:after, .dropdown-scroll>.custom-control .custom-control-input:checked~.custom-control-label:after {
	transform: scale(1.2)
}

@media (min-width:768px) {
.macos .dropdown-menu .custom-control-label:after, .macos .dropdown-menu .custom-control-label:before, .macos .dropdown-scroll .custom-control-label:after, .macos .dropdown-scroll .custom-control-label:before {
	top: .2rem
}
}
.progress {
	font-weight: 600
}
.card>.progress {
	border-radius: 0
}
.progress-xs {
	height: 3px
}
.progress-sm {
	height: .5rem
}
.progress-lg {
	height: 1.5rem
}
.progress-animated {
	-webkit-animation: progressAnimated 1s;
	animation: progressAnimated 1s
}
@-webkit-keyframes progressAnimated {
0% {
width:0
}
to {
width:100%
}
}
@keyframes progressAnimated {
0% {
width:0
}
to {
width:100%
}
}
.breadcrumb-item>a {
	color: inherit;
	border-radius: 1px
}
.breadcrumb-item>a:hover {
	text-decoration: none
}
.breadcrumb-item>a.focus, .breadcrumb-item>a:active, .breadcrumb-item>a:focus {
	color: #2e609c;
	background-color: rgba(52,108,176,.08);
	box-shadow: 0 0 0 4px rgba(52,108,176,.08), 0 0 0 5px rgba(246,247,249,.5);
	outline: 0
}
.breadcrumb-item.active>a:hover {
	text-decoration: none
}
.page-link {
	font-weight: 600;
	border-radius: 3rem
}
.page-link:focus {
	color: #2e609c
}
.page-item:first-child .page-link, .pagination-lg .page-item:first-child .page-link, .pagination-sm .page-item:first-child .page-link {
	border-top-left-radius: 3rem
}
.page-item:last-child .page-link, .pagination-lg .page-item:last-child .page-link, .pagination-sm .page-item:last-child .page-link {
	border-top-right-radius: 3rem
}
.nav-link {
	outline: 0;
	color: #888c9b
}
.active>.nav-link, .nav-link.active {
	color: <?= $themeColor; ?>
}
.nav-link.has-badge>.badge {
	position: absolute;
	top: .25rem;
	left: calc(100% - 1.25rem)
}
.nav-link:focus, .nav-link:hover {
	color: <?= $themeColor; ?>
}

@media (min-width:768px) {
.nav-link {
	font-size: .875rem
}
}
.nav-tabs .nav-link {
	padding: 1rem;
	border-width: 0 0 3px
}
.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
	color: #222230
}
.nav-tabs.flex-column .nav-link {
	border-width: 0 0 0 3px;
	border-radius: 0
}
.nav-tabs .dropdown-menu {
	margin-top: 10px
}
.nav-scroller {
	position: relative;
	z-index: 2;
	overflow-y: hidden;
	height: 3.625rem
}

@media (min-width:768px) {
.nav-scroller {
	height: 3.5rem
}
}
.nav-scroller>.nav {
	flex-wrap: nowrap;
	padding-bottom: 1rem;
	margin-top: -1px;
	overflow-x: auto;
	text-align: center;
	white-space: nowrap;
	-webkit-overflow-scrolling: touch
}

@media (min-width:768px) {
.nav-scroller>.nav {
	margin-top: 0
}
}
.nav-scroller>.nav:not(.nav-tabs) {
	margin-top: .5rem
}

@media (min-width:768px) {
.nav-scroller>.nav:not(.nav-tabs) {
	margin-top: calc(.625rem + 1px)
}
}
.nav-scroller>.card-header-tabs {
	margin-top: calc(-1rem - 1px)
}
.nav-center {
	display: block;
	text-align: center
}
.nav-center>.nav-item, .nav-center>.nav-link {
	display: inline-block
}
.nav-item.has-notified, .nav-link.has-notified {
	position: relative
}
.nav-item.has-notified:before, .nav-link.has-notified:before {
	position: absolute;
	top: .5rem;
	right: .75rem;
	content: "";
	display: block;
	width: 6px;
	height: 6px;
	border-radius: 3px;
	background-color: #f7c46c;
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}

@media (max-width:575.98px) {
.app-header>.navbar-expand-sm {
	max-height: 100vh;
	overflow-y: auto
}
}

@media (max-width:767.98px) {
.app-header>.navbar-expand-md {
	max-height: 100vh;
	overflow-y: auto
}
}

@media (max-width:991.98px) {
.app-header>.navbar-expand-lg {
	max-height: 100vh;
	overflow-y: auto
}
}

@media (max-width:1199.98px) {
.app-header>.navbar-expand-xl {
	max-height: 100vh;
	overflow-y: auto
}
}
.app-header>.navbar-expand {
	max-height: 100vh;
	overflow-y: auto
}
.nav-item .dropdown-toggle:after, .nav-item .fa, .nav-item .fas, .nav-item .oi {
	position: relative;
	top: .125rem
}
.modal.modal-alert .modal-dialog {
	opacity: 0;
	transform: scale(1.2);
	transition: transform .15s ease-in-out, opacity .15s ease-in-out
}
.modal.modal-alert.show .modal-dialog {
	transform: scale(1);
	opacity: 1
}
.modal-dialog-centered {
	margin: 0 auto
}
.modal-footer, .modal-header {
	flex: 0 0 auto
}
.modal-body {
	padding-top: 2px;
	padding-bottom: 2px
}
.modal-dialog-scrollable .modal-footer, .modal-dialog-scrollable .modal-header {
	z-index: 2
}
.modal-drawer .modal-dialog {
	margin-top: 0;
	margin-bottom: 0;
	position: fixed;
	top: 0;
	bottom: 0
}

@media (max-width:575.98px) {
.modal-drawer .modal-dialog {
	margin: 0;
	max-width: 100%
}
}
.modal-drawer .modal-content, .modal-drawer .modal-footer, .modal-drawer .modal-header {
	border-radius: 0
}
.modal-drawer .modal-content {
	height: 100%
}
.modal-drawer .modal-body {
	overflow: auto
}
.modal-drawer-right {
	right: 0;
	box-shadow: -1px 0 3px 0 rgba(20,20,31,.15)
}
.modal.fade .modal-drawer-right {
	transform: translate3d(100%, 0, 0)
}
.modal-drawer-right .modal-content {
	border-width: 0 0 0 1px
}
.modal-drawer-left {
	left: 0;
	box-shadow: 1px 0 3px 0 rgba(20,20,31,.15)
}
.modal.fade .modal-drawer-left {
	transform: translate3d(-100%, 0, 0)
}
.modal-drawer-left .modal-content {
	border-width: 0 1px 0 0
}
.modal.show .modal-drawer-left, .modal.show .modal-drawer-right {
	transform: translate(0)
}
.modal-docked .modal-dialog {
	margin: 0;
	position: fixed;
	bottom: 6.125rem;
	right: 1.25rem;
	width: 100%;
	height: calc(100vh - 7.125rem)
}
.modal-docked.fade .modal-dialog {
	transform: translateY(1.25rem)
}
.modal-docked.show .modal-dialog {
	transform: translateY(0)
}
.modal-docked .modal-content {
	position: absolute;
	bottom: 0;
	max-height: 100%;
	border: 0;
	box-shadow: 0 5px 40px rgba(20,20,31,.15)
}
.modal-docked .modal-body {
	overflow-y: auto
}
.modal-docked .close {
	margin: 0;
	padding: 0;
	position: absolute;
	right: .125rem;
	bottom: -4.6125rem;
	width: 4rem;
	height: 4rem;
	border-radius: 2rem;
	opacity: 1
}
.modal-docked .close:focus:not(.disabled), .modal-docked .close:hover:not(.disabled) {
	opacity: 1
}
.modal-dialog-scrollable .modal-header, .modal-drawer .modal-header {
	box-shadow: 0 2px 0 0 rgba(20,20,31,.125)
}
.modal-dialog-scrollable .modal-footer, .modal-drawer .modal-footer {
	box-shadow: 0 -2px 0 0 rgba(20,20,31,.125)
}
.modal-dialog-scrollable .modal-body-scrolled, .modal-drawer .modal-body-scrolled {
	box-shadow: none
}
.popover-body p {
	margin-bottom: .5rem
}
.font-size-lg {
	font-size: 1.143em
}
.font-size-sm {
	font-size: .875em
}
.text-blue {
	color: #0179a8!important
}
a.text-blue:focus, a.text-blue:hover {
	color: #01425c!important
}
.text-indigo {
	color: <?= $themeColor; ?>!important
}
a.text-indigo:focus, a.text-indigo:hover {
	color: #234875!important
}
.text-purple {
	color: #5f4b8b!important
}
a.text-purple:focus, a.text-purple:hover {
	color: #3d3059!important
}
.text-pink {
	color: #ff0538!important
}
a.text-pink:focus, a.text-pink:hover {
	color: #90467c!important
}
.text-red {
	color: #ea6759!important
}
a.text-red:focus, a.text-red:hover {
	color: #db2e1c!important
}
.text-orange {
	color: #ec935e!important
}
a.text-orange:focus, a.text-orange:hover {
	color: #e3651b!important
}
.text-yellow {
	color: #f7c46c!important
}
a.text-yellow:focus, a.text-yellow:hover {
	color: #f3a723!important
}
.text-green {
	color: #a7c796!important
}
a.text-green:focus, a.text-green:hover {
	color: #7dac64!important
}
.text-teal {
	color: #097b0a!important
}
a.text-teal:focus, a.text-teal:hover {
	color: #005649!important
}
.text-cyan {
	color: #3686a0!important
}
a.text-cyan:focus, a.text-cyan:hover {
	color: #235667!important
}
.text-white {
	color: #fff!important
}
a.text-white:focus, a.text-white:hover {
	color: #d9d9d9!important
}
.text-gray {
	color: #888c9b!important
}
a.text-gray:focus, a.text-gray:hover {
	color: #626675!important
}
.text-gray-dark {
	color: #222230!important
}
a.text-gray-dark:focus, a.text-gray-dark:hover {
	color: #020203!important
}
.text-white {
	color: #e6e8ed!important
}
a.text-white:focus, a.text-white:hover {
	color: #babfcd!important
}
.text-black {
	color: #363642!important
}
a.text-black:focus, a.text-black:hover {
	color: #141418!important
}
.text-muted-light {
	color: hsla(0,0%,100%,.6)!important
}
a.text-muted-light:focus, a.text-muted-light:hover {
	color: hsla(0,0%,100%,.8)!important
}
.text-muted-dark {
	color: rgba(20,20,31,.6)!important
}
a.text-muted-dark:focus, a.text-muted-dark:hover {
	color: rgba(20,20,31,.8)!important
}
.bg-blue {
	background-color: #0179a8!important
}
a.bg-blue:focus, a.bg-blue:hover, button.bg-blue:focus, button.bg-blue:hover {
	background-color: #015475!important
}
.bg-indigo {
	background-color: <?= $themeColor; ?>!important
}
a.bg-indigo:focus, a.bg-indigo:hover, button.bg-indigo:focus, button.bg-indigo:hover {
	background-color: #285489!important
}
.bg-purple {
	background-color: #5f4b8b!important
}
a.bg-purple:focus, a.bg-purple:hover, button.bg-purple:focus, button.bg-purple:hover {
	background-color: #48396a!important
}
.bg-pink {
	background-color: #ff0538!important
}
a.bg-pink:focus, a.bg-pink:hover, button.bg-pink:focus, button.bg-pink:hover {
	background-color: #a14e8b!important
}
.bg-red {
	background-color: #ea6759!important
}
a.bg-red:focus, a.bg-red:hover, button.bg-red:focus, button.bg-red:hover {
	background-color: #e43e2c!important
}
.bg-orange {
	background-color: #ec935e!important
}
a.bg-orange:focus, a.bg-orange:hover, button.bg-orange:focus, button.bg-orange:hover {
	background-color: #e77430!important
}
.bg-yellow {
	background-color: #f7c46c!important
}
a.bg-yellow:focus, a.bg-yellow:hover, button.bg-yellow:focus, button.bg-yellow:hover {
	background-color: #f4b13c!important
}
.bg-green {
	background-color: #a7c796!important
}
a.bg-green:focus, a.bg-green:hover, button.bg-green:focus, button.bg-green:hover {
	background-color: #8bb575!important
}
.bg-teal {
	background-color: #097b0a!important
}
a.bg-teal:focus, a.bg-teal:hover, button.bg-teal:focus, button.bg-teal:hover {
	background-color: #006f5f!important
}
.bg-cyan {
	background-color: #3686a0!important
}
a.bg-cyan:focus, a.bg-cyan:hover, button.bg-cyan:focus, button.bg-cyan:hover {
	background-color: #29667a!important
}
.bg-gray {
	background-color: #888c9b!important
}
a.bg-gray:focus, a.bg-gray:hover, button.bg-gray:focus, button.bg-gray:hover {
	background-color: #6e7282!important
}
.bg-gray-dark {
	background-color: #222230!important
}
a.bg-gray-dark:focus, a.bg-gray-dark:hover, button.bg-gray-dark:focus, button.bg-gray-dark:hover {
	background-color: #0d0d12!important
}
.bg-white {
	background-color: #fff!important
}
a.bg-white:focus, a.bg-white:hover, button.bg-white:focus, button.bg-white:hover {
	background-color: #e6e6e6!important
}
.bg-muted {
	background-color: #e6e8ed!important
}
a.bg-muted:focus, a.bg-muted:hover, button.bg-muted:focus, button.bg-muted:hover {
	background-color: #c8cdd8!important
}
.bg-black {
	background-color: #14141f!important
}
a.bg-black:focus, a.bg-black:hover, button.bg-black:focus, button.bg-black:hover {
	background-color: #000!important
}
.fill-blue {
	fill: #0179a8!important
}
.fill-indigo {
	fill: <?= $themeColor; ?>!important
}
.fill-purple {
	fill: #5f4b8b!important
}
.fill-pink {
	fill: #ff0538!important
}
.fill-red {
	fill: #ea6759!important
}
.fill-orange {
	fill: #ec935e!important
}
.fill-yellow {
	fill: #f7c46c!important
}
.fill-green {
	fill: #a7c796!important
}
.fill-teal {
	fill: #097b0a!important
}
.fill-cyan {
	fill: #3686a0!important
}
.fill-gray {
	fill: #888c9b!important
}
.fill-gray-dark {
	fill: #222230!important
}
.fill-primary {
	fill: <?= $themeColor; ?>!important
}
.fill-secondary {
	fill: #f6f7f9!important
}
.fill-success {
	fill: #097b0a!important
}
.fill-info {
	fill: #0179a8!important
}
.fill-warning {
	fill: #f7c46c!important
}
.fill-danger {
	fill: #ff0538!important
}
.fill-light {
	fill: #f6f7f9!important
}
.fill-dark {
	fill: #222230!important
}
.fill-white {
	fill: #fff!important
}
.fill-muted {
	fill: #e6e8ed!important
}
.fill-black {
	fill: #14141f!important
}
.bg-facebook {
	background-color: #365397!important
}
a.bg-facebook:focus, a.bg-facebook:hover, button.bg-facebook:focus, button.bg-facebook:hover {
	background-color: #293e71!important
}
.bg-facebook {
	color: #fff!important
}
.text-facebook {
	color: #365397!important
}
a.text-facebook:focus, a.text-facebook:hover {
	color: #22345f!important
}
.bg-twitter {
	background-color: #00a9f1!important
}
a.bg-twitter:focus, a.bg-twitter:hover, button.bg-twitter:focus, button.bg-twitter:hover {
	background-color: #0085be!important
}
.bg-twitter {
	color: #fff!important
}
.text-twitter {
	color: #00a9f1!important
}
a.text-twitter:focus, a.text-twitter:hover {
	color: #0073a5!important
}
.bg-linkedin {
	background-color: #006db3!important
}
a.bg-linkedin:focus, a.bg-linkedin:hover, button.bg-linkedin:focus, button.bg-linkedin:hover {
	background-color: #004e80!important
}
.bg-linkedin {
	color: #fff!important
}
.text-linkedin {
	color: #006db3!important
}
a.text-linkedin:focus, a.text-linkedin:hover {
	color: #003e67!important
}
.bg-apple {
	background-color: #737373!important
}
a.bg-apple:focus, a.bg-apple:hover, button.bg-apple:focus, button.bg-apple:hover {
	background-color: #5a5a5a!important
}
.bg-apple {
	color: #fff!important
}
.text-apple {
	color: #737373!important
}
a.text-apple:focus, a.text-apple:hover {
	color: #4d4d4d!important
}
.bg-google {
	background-color: #4285f4!important
}
a.bg-google:focus, a.bg-google:hover, button.bg-google:focus, button.bg-google:hover {
	background-color: #1266f1!important
}
.bg-google {
	color: #fff!important
}
.text-google {
	color: #4285f4!important
}
a.text-google:focus, a.text-google:hover {
	color: #0d5bdd!important
}
.bg-google_plus {
	background-color: #e0452c!important
}
a.bg-google_plus:focus, a.bg-google_plus:hover, button.bg-google_plus:focus, button.bg-google_plus:hover {
	background-color: #bd321c!important
}
.bg-google_plus {
	color: #fff!important
}
.text-google_plus {
	color: #e0452c!important
}
a.text-google_plus:focus, a.text-google_plus:hover {
	color: #a72c19!important
}
.bg-youtube {
	background-color: #f33!important
}
a.bg-youtube:focus, a.bg-youtube:hover, button.bg-youtube:focus, button.bg-youtube:hover {
	background-color: red!important
}
.bg-youtube {
	color: #fff!important
}
.text-youtube {
	color: #f33!important
}
a.text-youtube:focus, a.text-youtube:hover {
	color: #e60000!important
}
.bg-vimeo {
	background-color: #48b6ed!important
}
a.bg-vimeo:focus, a.bg-vimeo:hover, button.bg-vimeo:focus, button.bg-vimeo:hover {
	background-color: #1aa3e8!important
}
.bg-vimeo {
	color: #363642!important
}
.text-vimeo {
	color: #48b6ed!important
}
a.text-vimeo:focus, a.text-vimeo:hover {
	color: #1594d4!important
}
.bg-pinterest {
	background-color: #ce1a19!important
}
a.bg-pinterest:focus, a.bg-pinterest:hover, button.bg-pinterest:focus, button.bg-pinterest:hover {
	background-color: #a11413!important
}
.bg-pinterest {
	color: #fff!important
}
.text-pinterest {
	color: #ce1a19!important
}
a.text-pinterest:focus, a.text-pinterest:hover {
	color: #8a1111!important
}
.bg-yelp {
	background-color: #c30f00!important
}
a.bg-yelp:focus, a.bg-yelp:hover, button.bg-yelp:focus, button.bg-yelp:hover {
	background-color: #900b00!important
}
.bg-yelp {
	color: #fff!important
}
.text-yelp {
	color: #c30f00!important
}
a.text-yelp:focus, a.text-yelp:hover {
	color: #770900!important
}
.bg-dribbble {
	background-color: #ed4584!important
}
a.bg-dribbble:focus, a.bg-dribbble:hover, button.bg-dribbble:focus, button.bg-dribbble:hover {
	background-color: #e91765!important
}
.bg-dribbble {
	color: #fff!important
}
.text-dribbble {
	color: #ed4584!important
}
a.text-dribbble:focus, a.text-dribbble:hover {
	color: #d1145b!important
}
.bg-amazon {
	background-color: #ff9700!important
}
a.bg-amazon:focus, a.bg-amazon:hover, button.bg-amazon:focus, button.bg-amazon:hover {
	background-color: #cc7900!important
}
.bg-amazon {
	color: #363642!important
}
.text-amazon {
	color: #ff9700!important
}
a.text-amazon:focus, a.text-amazon:hover {
	color: #b36a00!important
}
.bg-ebay {
	background-color: #083790!important
}
a.bg-ebay:focus, a.bg-ebay:hover, button.bg-ebay:focus, button.bg-ebay:hover {
	background-color: #052560!important
}
.bg-ebay {
	color: #fff!important
}
.text-ebay {
	color: #083790!important
}
a.text-ebay:focus, a.text-ebay:hover {
	color: #041b48!important
}
.bg-skype {
	background-color: #00acf4!important
}
a.bg-skype:focus, a.bg-skype:hover, button.bg-skype:focus, button.bg-skype:hover {
	background-color: #0088c1!important
}
.bg-skype {
	color: #fff!important
}
.text-skype {
	color: #00acf4!important
}
a.text-skype:focus, a.text-skype:hover {
	color: #0076a8!important
}
.bg-instagram {
	background-color: #396d9a!important
}
a.bg-instagram:focus, a.bg-instagram:hover, button.bg-instagram:focus, button.bg-instagram:hover {
	background-color: #2b5375!important
}
.bg-instagram {
	color: #fff!important
}
.text-instagram {
	color: #396d9a!important
}
a.text-instagram:focus, a.text-instagram:hover {
	color: #244562!important
}
.bg-dropbox {
	background-color: #0d84de!important
}
a.bg-dropbox:focus, a.bg-dropbox:hover, button.bg-dropbox:focus, button.bg-dropbox:hover {
	background-color: #0a67ae!important
}
.bg-dropbox {
	color: #fff!important
}
.text-dropbox {
	color: #0d84de!important
}
a.text-dropbox:focus, a.text-dropbox:hover {
	color: #095996!important
}
.bg-flickr {
	background-color: #ea0066!important
}
a.bg-flickr:focus, a.bg-flickr:hover, button.bg-flickr:focus, button.bg-flickr:hover {
	background-color: #b70050!important
}
.bg-flickr {
	color: #fff!important
}
.text-flickr {
	color: #ea0066!important
}
a.text-flickr:focus, a.text-flickr:hover {
	color: #9e0045!important
}
.bg-github {
	background-color: #2f2f2f!important
}
a.bg-github:focus, a.bg-github:hover, button.bg-github:focus, button.bg-github:hover {
	background-color: #161616!important
}
.bg-github {
	color: #fff!important
}
.text-github {
	color: #2f2f2f!important
}
a.text-github:focus, a.text-github:hover {
	color: #090909!important
}
.bg-basecamp {
	background-color: #6bbd6d!important
}
a.bg-basecamp:focus, a.bg-basecamp:hover, button.bg-basecamp:focus, button.bg-basecamp:hover {
	background-color: #4ca94e!important
}
.bg-basecamp {
	color: #363642!important
}
.text-basecamp {
	color: #6bbd6d!important
}
a.text-basecamp:focus, a.text-basecamp:hover {
	color: #449846!important
}
.bg-tumblr {
	background-color: #304c68!important
}
a.bg-tumblr:focus, a.bg-tumblr:hover, button.bg-tumblr:focus, button.bg-tumblr:hover {
	background-color: #203345!important
}
.bg-tumblr {
	color: #fff!important
}
.text-tumblr {
	color: #304c68!important
}
a.text-tumblr:focus, a.text-tumblr:hover {
	color: #182634!important
}
.bg-foursquare {
	background-color: #207dc5!important
}
a.bg-foursquare:focus, a.bg-foursquare:hover, button.bg-foursquare:focus, button.bg-foursquare:hover {
	background-color: #196199!important
}
.bg-foursquare {
	color: #fff!important
}
.text-foursquare {
	color: #207dc5!important
}
a.text-foursquare:focus, a.text-foursquare:hover {
	color: #155383!important
}
.bg-box {
	background-color: #1277bc!important
}
a.bg-box:focus, a.bg-box:hover, button.bg-box:focus, button.bg-box:hover {
	background-color: #0e5a8d!important
}
.bg-box {
	color: #fff!important
}
.text-box {
	color: #1277bc!important
}
a.text-box:focus, a.text-box:hover {
	color: #0b4b76!important
}
.link-text {
	color: #363642
}
.link-text:hover {
	color: #363642;
	text-decoration: none
}
.overflow-y-auto {
	overflow-y: auto!important
}
.overflow-y-hidden {
	overflow-y: hidden!important
}
.overflow-x-auto {
	overflow-x: auto!important
}
.overflow-x-hidden {
	overflow-x: hidden!important
}
.scale-25 {
	transform: scale(.25)!important
}
.scale-50 {
	transform: scale(.5)!important
}
.scale-75 {
	transform: scale(.75)!important
}
.scale-100 {
	transform: scale(1)!important
}
.scale-125 {
	transform: scale(1.25)!important
}
.scale-150 {
	transform: scale(1.5)!important
}
.scale-175 {
	transform: scale(1.75)!important
}
.scale-200 {
	transform: scale(2)!important
}
.translate-x-25 {
	transform: translate3d(25%, 0, 0)!important
}
.translate-x-50 {
	transform: translate3d(50%, 0, 0)!important
}
.translate-x-75 {
	transform: translate3d(75%, 0, 0)!important
}
.translate-x-100 {
	transform: translate3d(100%, 0, 0)!important
}
.translate-x-n25 {
	transform: translate3d(-25%, 0, 0)!important
}
.translate-x-n50 {
	transform: translate3d(-50%, 0, 0)!important
}
.translate-x-n75 {
	transform: translate3d(-75%, 0, 0)!important
}
.translate-x-n100 {
	transform: translate3d(-100%, 0, 0)!important
}
.translate-y-25 {
	transform: translate3d(0, 25%, 0)!important
}
.translate-y-50 {
	transform: translate3d(0, 50%, 0)!important
}
.translate-y-75 {
	transform: translate3d(0, 75%, 0)!important
}
.translate-y-100 {
	transform: translate3d(0, 100%, 0)!important
}
.translate-y-n25 {
	transform: translate3d(0, -25%, 0)!important
}
.translate-y-n50 {
	transform: translate3d(0, -50%, 0)!important
}
.translate-y-n75 {
	transform: translate3d(0, -75%, 0)!important
}
.translate-y-n100 {
	transform: translate3d(0, -100%, 0)!important
}
.translate-both-25 {
	transform: translate3d(25%, -25%, 0)!important
}
.translate-both-50 {
	transform: translate3d(50%, -50%, 0)!important
}
.translate-both-75 {
	transform: translate3d(75%, -75%, 0)!important
}
.translate-both-100 {
	transform: translate3d(100%, -100%, 0)!important
}
.translate-both-n25 {
	transform: translate3d(-25%, 25%, 0)!important
}
.translate-both-n50 {
	transform: translate3d(-50%, 50%, 0)!important
}
.translate-both-n75 {
	transform: translate3d(-75%, 75%, 0)!important
}
.translate-both-n100 {
	transform: translate3d(-100%, 100%, 0)!important
}
.rotate-90 {
	-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
	transform: rotate(90deg)!important
}
.rotate-180 {
	-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
	transform: rotate(180deg)!important
}
.rotate-270 {
	-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
	transform: rotate(270deg)!important
}
.flip-x {
	-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
	transform: scaleX(-1)!important
}
.flip-y {
	transform: scaleY(-1)!important
}
.flip-both, .flip-x.flip-y, .flip-y {
	-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
}
.flip-both, .flip-x.flip-y {
	transform: scale(-1)!important
}
.grayscale {
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%)
}
.notransition {
	transition: none!important
}
@-webkit-keyframes pulse {
0% {
opacity:1
}
50% {
opacity:0
}
to {
opacity:1
}
}
@keyframes pulse {
0% {
opacity:1
}
50% {
opacity:0
}
to {
opacity:1
}
}
.pulse {
	-webkit-animation: pulse 2.5s ease infinite;
	animation: pulse 2.5s ease infinite
}
.caret {
	display: inline-block;
	width: 0;
	height: 0;
	margin-left: 4px;
	vertical-align: middle;
	border-top: 4px dashed;
	border-top: 4px solid\9;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent
}
.log-divider {
	position: relative;
	margin: 1.25rem 0;
	height: 2em;
	text-align: center
}
.log-divider:before {
	content: "";
	position: relative;
	display: block;
	top: 1em;
	border-top: 1px solid rgba(34,34,48,.1);
	z-index: 1
}
.log-divider>span {
	display: inline-block;
	position: relative;
	z-index: 2;
	border-radius: 50px;
	background: #fff;
	padding: 0 1em;
	color: #888c9b;
	line-height: 2em
}
.has-dragable .drag-indicator {
	opacity: 0
}
.has-dragable:hover .drag-indicator {
	opacity: 1
}
.drag-handle {
	cursor: move!important;
	cursor: -webkit-grab!important;
	cursor: grab!important
}
.drag-indicator {
	display: inline-block;
	margin: 0 .5em;
	height: 8px;
	width: 6px;
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAYAAABWKLW/AAAAGUlEQVR42mNgAIJz507/Z4AxVqxYAuEgAwD26QnApt++GwAAAABJRU5ErkJggg==);
	transform: translate3d(-.5em, 0, 0);
	cursor: move;
	cursor: -webkit-grab;
	cursor: grab;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.drag-indicator-lg {
	height: 14px;
	width: 8px
}
.drag-indicator-tall {
	height: 20px;
	width: 8px
}
.typing {
	margin: 0;
	line-height: inherit;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.typing, .typing .dot {
	position: relative;
	display: inline-block
}
.typing .dot {
	margin-bottom: .125em;
	border-radius: 50%;
	width: .375rem;
	height: .375rem;
	background-color: #a6abbd;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-animation: typing 1.2s ease infinite;
	animation: typing 1.2s ease infinite
}
.typing .dot:nth-child(2) {
	-webkit-animation-delay: .15s;
	animation-delay: .15s
}
.typing .dot:nth-child(3) {
	-webkit-animation-delay: .3s;
	animation-delay: .3s
}
@-webkit-keyframes typing {
0%, 50%, to {
transform:translateY(0)
}
25% {
transform:translateY(-150%)
}
}
@keyframes typing {
0%, 50%, to {
transform:translateY(0)
}
25% {
transform:translateY(-150%)
}
}
.circle {
	border-radius: 9999px!important
}
.stacked-menu {
	position: relative;
	padding: .25rem 0;
	background-color: transparent
}
.stacked-menu ul.menu {
	display: block;
	padding-left: 0;
	margin-bottom: 0;
	list-style: none
}
.stacked-menu ul.menu+.menu {
	margin-top: 1em
}
.stacked-menu .menu-header {
	margin: .5em 0 0;
	padding: .5rem 1rem;
	color: #888c9b;
	font-size: .8125rem;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1px
}
.stacked-menu .menu-header>.badge, .stacked-menu .menu-header>.label {
	position: absolute;
	right: .75rem;
	z-index: 2
}
.stacked-menu .menu-subhead {
	display: none;
	color: <?= $themeColor; ?>
}
.stacked-menu .menu-link, .stacked-menu .menu-subhead {
	padding: .5rem 1rem;
	font-size: .875rem;
	line-height: 1.75em;
	overflow: hidden
}
.stacked-menu .menu-link {
	position: relative;
	display: block;
	color: #888c9b;
	text-decoration: none
}
.stacked-menu .menu-link>.menu-icon {
	width: 1.25em;
	margin-right: .5em;
	text-align: center;
	font-size: 1.125rem;
	color: #a6abbd
}
.stacked-menu .menu-link>.badge, .stacked-menu .menu-link>.label {
	position: absolute;
	right: .75rem;
	margin-top: .25em;
	z-index: 2
}
.stacked-menu .menu-link:focus {
	color: <?= $themeColor; ?>;
	background-color: transparent;
	text-decoration: none;
	overflow: visible
}
.stacked-menu .menu-link:focus .menu-icon {
	color: #888c9b
}
.stacked-menu .menu-link:hover {
	color: <?= $themeColor; ?>;
	background-color: transparent;
	text-decoration: none;
	overflow: visible
}
.stacked-menu .menu-link:hover .menu-icon {
	color: #888c9b
}
.stacked-menu .menu-item+.menu-item {
	margin-top: 0
}
.stacked-menu .menu-item.has-open:not(.has-active)>.menu-link {
	background-color: transparent;
	color: <?= $themeColor; ?>
}
.stacked-menu .menu-item.has-open:not(.has-active)>.menu-link .menu-icon {
	color: #888c9b
}
.stacked-menu .menu-item.has-active>.menu-link {
	background-color: transparent;
	color: <?= $themeColor; ?>
}
.stacked-menu .menu-item.has-active>.menu-link .menu-icon {
	color: <?= $themeColor; ?>
}
.stacked-menu .has-child {
	position: relative
}
.stacked-menu .has-child>.menu {
	height: 0;
	visibility: hidden;
	opacity: 0;
	background-color: transparent
}
.stacked-menu .has-child.has-active:hover>.menu, .stacked-menu .has-child.has-open>.menu {
	overflow: visible
}
.stacked-menu .has-child.has-active>.menu {
	height: auto;
	visibility: visible;
	opacity: 1
}
.stacked-menu>.menu>.menu-item>.menu-link {
	color: #363642
}
.stacked-menu>.menu>.menu-item.has-open>.menu-link, .stacked-menu>.menu>.menu-item>.menu-link:focus, .stacked-menu>.menu>.menu-item>.menu-link:hover {
	color: #222230;
	background-color: transparent
}
.stacked-menu>.menu>.menu-item.has-active>.menu-link {
	background-color: transparent;
	color: <?= $themeColor; ?>
}
.stacked-menu>.menu>.menu-item>.menu .menu-link {
	padding-left: 3rem
}
.stacked-menu>.menu>.menu-item>.menu .menu .menu-link {
	padding-left: 4rem
}
.stacked-menu>.menu>.menu-item>.menu .menu .menu .menu-link {
	padding-left: 5rem
}
.stacked-menu .menu-item.disabled>.menu-link, .stacked-menu .menu-item.disabled>.menu-link .menu-icon, .stacked-menu .menu-item>.menu-link.disabled, .stacked-menu .menu-item>.menu-link.disabled .menu-icon {
	color: #888c9b
}
.stacked-menu .menu-item.disabled>.menu-link:focus, .stacked-menu .menu-item.disabled>.menu-link:focus .menu-icon, .stacked-menu .menu-item.disabled>.menu-link:hover, .stacked-menu .menu-item.disabled>.menu-link:hover .menu-icon, .stacked-menu .menu-item>.menu-link.disabled:focus, .stacked-menu .menu-item>.menu-link.disabled:focus .menu-icon, .stacked-menu .menu-item>.menu-link.disabled:hover, .stacked-menu .menu-item>.menu-link.disabled:hover .menu-icon {
	background-color: transparent;
	color: #888c9b
}
.stacked-menu-has-compact .has-child.has-active>.menu {
	visibility: hidden;
	height: 0;
	opacity: 0
}
.stacked-menu-has-compact .has-child.has-active .menu-subhead {
	background-color: transparent
}
.stacked-menu-has-compact .has-child .menu-subhead {
	display: block
}
.stacked-menu-has-compact>.menu>.menu-item>.menu-link {
	text-align: center;
	padding-right: 0;
	padding-left: 0;
	max-height: 40px
}
.stacked-menu-has-compact>.menu>.menu-item>.menu-link>.badge, .stacked-menu-has-compact>.menu>.menu-item>.menu-link>.label {
	top: 0;
	right: .25rem
}
.stacked-menu-has-compact>.menu>.menu-item>.menu-link .menu-icon {
	margin: 0;
	font-size: 1.25em;
	line-height: 1.5em
}
.stacked-menu-has-compact>.menu>.menu-item.has-child>.menu-link .menu-text {
	display: none
}
.stacked-menu-has-compact>.menu>.menu-header {
	margin: 0;
	height: 0;
	overflow: hidden;
	visibility: hidden;
	opacity: 0;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.stacked-menu-has-compact>.menu>.menu-item:not(.has-child)>.menu-link .menu-text {
	position: absolute;
	display: block;
	top: 0;
	left: 100%;
	padding: .5rem .75rem .5rem 0;
	border-radius: 0 0 0 0;
	width: 0;
	height: 0;
	visibility: hidden;
	opacity: 0;
	background-color: transparent;
	line-height: 1.75em;
	white-space: nowrap;
	transition: opacity .15s linear
}
.stacked-menu-has-compact>.menu>.menu-item:not(.has-child)>.menu-link:hover .menu-text {
	width: auto;
	height: auto;
	visibility: visible;
	opacity: 1
}
.stacked-menu-has-compact>.menu>.menu-item.disabled>.menu-link .menu-text, .stacked-menu-has-compact>.menu>.menu-item.has-active>.menu-link .menu-text, .stacked-menu-has-compact>.menu>.menu-item>.menu-link.disabled .menu-text {
	background-color: transparent
}
.stacked-menu-has-compact>.menu>.menu-item.has-child>.menu-link:before {
	content: none
}
.stacked-menu-has-compact>.menu>.menu-item.has-child>.menu-link .menu-text {
	padding: .5rem 1rem;
	text-align: left;
	width: 200px
}
.stacked-menu-has-collapsible .has-child>.menu-link:after {
	display: inline-block;
	content: "+";
	position: absolute;
	right: .75rem;
	top: 50%;
	transform: translateY(-.5em);
	height: 1em;
	width: 1em;
	line-height: 1em;
	text-align: center
}
.stacked-menu-has-collapsible .has-child.has-active>.menu-link:after, .stacked-menu-has-collapsible .has-child.has-open>.menu-link:after {
	content: "-"
}
.stacked-menu-has-collapsible .has-child>.menu {
	visibility: visible;
	opacity: 1;
	overflow: hidden
}
.stacked-menu-has-collapsible .has-child.has-open:not(.has-active)>.menu {
	height: auto
}
.stacked-menu-has-collapsible.stacked-menu-has-compact>.menu>.has-child>.menu {
	transform-origin: 0 0;
	transform: scale(.6);
	transition: opacity .15s linear, transform .15s linear
}
.stacked-menu-has-collapsible.stacked-menu-has-compact>.menu>.has-child.has-open>.menu {
	transform: scale(1)
}
.stacked-menu-has-collapsible.stacked-menu-has-compact>.menu>.has-child>.menu-link:after {
	display: none
}
.stacked-menu-has-collapsible.stacked-menu-has-compact .has-child.has-open>.menu {
	position: absolute;
	width: 200px;
	top: 0;
	left: 100%;
	height: auto;
	visibility: visible;
	opacity: 1;
	border-radius: 0 0 0 0
}
.stacked-menu-has-collapsible.stacked-menu-has-compact .has-child>.menu .menu-link {
	padding-left: 1rem
}
.stacked-menu-has-collapsible.stacked-menu-has-compact .menu .menu .has-child.has-open>.menu {
	position: static;
	width: auto;
	top: auto;
	left: auto
}
.stacked-menu-has-collapsible.stacked-menu-has-compact .menu .menu .has-child>.menu .menu-link {
	padding-left: 2rem
}
.stacked-menu-has-collapsible.stacked-menu-has-compact .menu .menu .has-child>.menu .menu .menu-link {
	padding-left: 3rem
}
.stacked-menu-has-hoverable .has-child>.menu {
	transform-origin: 0 0;
	transition: opacity .15s linear, transform .15s linear
}
.stacked-menu-has-hoverable .has-child:not(.has-active)>.menu {
	transform: scale(.6)
}
.stacked-menu-has-hoverable.stacked-menu-has-compact>.menu>.has-child>.menu {
	transition: opacity .15s linear, transform .15s linear
}
.stacked-menu-has-hoverable.stacked-menu-has-compact .has-child>.menu {
	transform: scale(.6)
}
.stacked-menu-has-compact .has-child.has-open:not(.has-active)>.menu, .stacked-menu-has-hoverable .has-child.has-open:not(.has-active)>.menu {
	position: absolute;
	width: 200px;
	top: 0;
	left: 100%;
	height: auto;
	visibility: visible;
	opacity: 1;
	transform: scale(1)
}
.stacked-menu-has-compact .has-child>.menu .menu-item>.menu .menu-link, .stacked-menu-has-compact .has-child>.menu .menu-item>.menu .menu .menu-link, .stacked-menu-has-hoverable .has-child>.menu .menu-item>.menu .menu-link, .stacked-menu-has-hoverable .has-child>.menu .menu-item>.menu .menu .menu-link {
	padding-left: 1rem
}
.stacked-menu-has-compact .has-child>.menu-link:before, .stacked-menu-has-hoverable .has-child>.menu-link:before {
	content: "";
	position: absolute;
	right: 0;
	top: 50%;
	width: 0;
	height: 0;
	border-top: 8px solid transparent;
	border-bottom: 8px solid transparent;
	border-right: 8px solid transparent;
	transform: translateY(-8px)
}
.stacked-menu-has-hoverable.stacked-menu-has-compact .has-child.has-open>.menu {
	position: absolute;
	width: 200px;
	top: 0;
	left: 100%;
	height: auto;
	visibility: visible;
	opacity: 1;
	border-radius: 0 0 0 0;
	transform: scale(1)
}
.stacked-menu-has-hoverable.stacked-menu-has-compact .has-child.has-open>.menu .menu-item>.menu-link {
	padding-left: 1rem
}
.stacked-menu-has-left.stacked-menu-has-compact>.menu>.menu-item>.menu-link>.badge {
	right: auto;
	left: .25rem
}
.stacked-menu-has-left.stacked-menu-has-compact>.menu>.menu-item:not(.has-child)>.menu-link .menu-text {
	right: 100%;
	left: auto;
	padding: .5rem 0 .5rem .75rem;
	border-radius: 0 0 0 0
}
.stacked-menu-has-left.stacked-menu-has-collapsible.stacked-menu-has-compact>.menu>.has-child>.menu, .stacked-menu-has-left.stacked-menu-has-hoverable .has-child>.menu {
	transform-origin: 100% 0
}
.stacked-menu-has-left.stacked-menu-has-compact .has-child.has-open:not(.has-active)>.menu, .stacked-menu-has-left.stacked-menu-has-hoverable .has-child.has-open:not(.has-active)>.menu {
	left: auto;
	right: 100%
}
.stacked-menu-has-left.stacked-menu-has-compact .has-child.has-open:not(.has-active)>.menu-link:before, .stacked-menu-has-left.stacked-menu-has-hoverable .has-child.has-open:not(.has-active)>.menu-link:before {
	right: auto;
	left: 0;
	border-right: 0 solid transparent;
	border-left: 8px solid transparent
}
.stacked-menu-has-left.stacked-menu-has-collapsible.stacked-menu-has-compact .has-child.has-open>.menu, .stacked-menu-has-left.stacked-menu-has-hoverable.stacked-menu-has-compact .has-child.has-open>.menu {
	left: auto;
	right: 100%
}
.stacked-menu {
	padding-top: 1rem;
	width: 100%;
	margin-bottom: 1rem
}
.stacked-menu .menu-link, .stacked-menu .menu-subhead {
	padding-right: 1.5rem;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}
.stacked-menu .menu-link {
	font-size: 1rem;
	outline: 0
}
.stacked-menu .menu-link:hover {
	overflow: hidden
}
.stacked-menu .menu-link>.badge, .stacked-menu .menu-link>.label {
	right: 2rem;
	margin-top: .375em
}

@media (min-width:768px) {
.stacked-menu .menu-link {
	padding-top: .375rem;
	padding-bottom: .375rem;
	font-size: .875rem;
	line-height: 1.25rem
}
.stacked-menu .menu-link>.badge, .stacked-menu .menu-link>.label {
	right: 1.75rem;
	margin-top: .15em
}
}
.stacked-menu .menu-header {
	margin-top: 1rem;
	letter-spacing: 0;
	line-height: 1.25rem
}
.stacked-menu .menu-header>.badge {
	position: relative;
	top: 3px;
	right: -.25rem;
	float: right
}
.stacked-menu .menu-item.has-active:not(.has-child)>.menu-link {
	font-weight: 600
}
.stacked-menu .menu-item.has-active.has-child>.menu-link {
	color: #363642
}
.stacked-menu:not(.stacked-menu-has-compact)>.menu>.menu-item>.menu .menu-link {
	padding-left: 3.25rem
}
.stacked-menu:not(.stacked-menu-has-compact)>.menu>.menu-item>.menu .menu .menu-link {
	padding-left: 4.25rem
}
.stacked-menu:not(.stacked-menu-has-compact)>.menu>.menu-item>.menu .menu .menu .menu-link {
	padding-left: 5.25rem
}
.stacked-menu-has-collapsible .has-child>.menu-link:after {
	content: "";
	margin-top: -.375rem;
	opacity: .4;
	transform: translateY(0);
	transition: transform .2s ease-in-out;
	background: url("data:image/svg+xml;charset=utf-8,%3Csvg aria-hidden='true' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 256 512'%3E%3Cpath fill='currentColor' d='M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z'/%3E%3C/svg%3E") 50% no-repeat
}
.stacked-menu-has-collapsible .has-child.has-active>.menu-link:after, .stacked-menu-has-collapsible .has-child.has-open>.menu-link:after {
	content: "";
	transform: rotate(90deg)
}
.pace {
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.pace .pace-progress {
	background: #097b0a;
	position: fixed;
	z-index: 1030;
	top: 3.5rem;
	right: 100%;
	width: 100%;
	height: 4px
}
.pace .pace-progress-inner {
	display: block;
	position: absolute;
	right: 0;
	width: 6px;
	height: 100%;
	box-shadow: 0 0 10px #097b0a, 0 0 5px #097b0a;
	opacity: 1
}
.pace .pace-activity {
	display: block;
	position: fixed;
	z-index: 1030;
	top: 4.5rem;
	right: 1rem;
	width: 1.25rem;
	height: 1.25rem;
	border-color: #097b0a transparent transparent #097b0a;
	border-style: solid;
	border-width: 3px;
	border-radius: 1rem;
	-webkit-animation: pace-spinner .4s linear infinite;
	animation: pace-spinner .4s linear infinite
}
.pace-inactive {
	display: none
}
@-webkit-keyframes pace-spinner {
0% {
transform:rotate(0deg)
}
to {
transform:rotate(1turn)
}
}
@keyframes pace-spinner {
0% {
transform:rotate(0deg)
}
to {
transform:rotate(1turn)
}
}
.masonry-layout {
	display: flex;
	flex-wrap: wrap;
	margin-right: -10px;
	margin-left: -10px
}
.perfect-scrollbar {
	position: relative;
	overflow: hidden
}
.ps {
	overflow: hidden!important;
	overflow-anchor: none;
	-ms-overflow-style: none;
	touch-action: auto;
	-ms-touch-action: auto
}
.ps__rail-x, .ps__rail-y {
	position: absolute;
	display: none;
	opacity: 0;
	transition: background-color .2s linear, opacity .2s linear;
	z-index: 3
}
.ps__rail-x {
	height: 10px;
	bottom: 0
}
.ps__rail-y {
	width: 10px;
	right: 0
}
.ps--active-x>.ps__rail-x, .ps--active-y>.ps__rail-y {
	display: block;
	background-color: transparent
}
.ps--focus>.ps__rail-x, .ps--focus>.ps__rail-y, .ps--scrolling-x>.ps__rail-x, .ps--scrolling-y>.ps__rail-y, .ps:hover>.ps__rail-x, .ps:hover>.ps__rail-y {
	opacity: 1
}
.ps__rail-x:focus, .ps__rail-x:hover, .ps__rail-y:focus, .ps__rail-y:hover {
	background-color: rgba(34,34,48,.08);
	opacity: 1
}
.ps__thumb-x, .ps__thumb-y {
	position: absolute;
	background-color: rgba(34,34,48,.08);
	border-radius: 6px;
	transition: background-color .2s linear, height .2s ease-in-out
}
.ps__thumb-x {
	height: 6px;
	bottom: 2px
}
.ps__thumb-y {
	width: 6px;
	right: 2px
}
.ps__rail-y::focus .ps__thumb-y, .ps__rail-y::hover .ps__thumb-y {
background-color:rgba(34,34,48,.12);
width:10px
}
.ps__rail-y::focus .ps__thumb-x, .ps__rail-y::hover .ps__thumb-x {
background-color:rgba(34,34,48,.12);
height:10px
}
@supports (-ms-overflow-style:none) {
.ps {
overflow:auto!important
}
}

@media (-ms-high-contrast:none), screen and (-ms-high-contrast:active) {
.ps {
	overflow: auto!important
}
}
.dt-print-view {
	display: block!important;
	background-color: #fff!important
}
.dataTable {
	max-width: none
}
.dataTable td.dataTables_empty, .dataTable th.dataTables_empty {
	text-align: center
}
.dataTable.nowrap td, .dataTable.nowrap th {
	white-space: nowrap
}
div.dataTables_wrapper div.dataTables_length label {
	font-weight: 400;
	text-align: left;
	white-space: nowrap
}
div.dataTables_wrapper div.dataTables_length select {
	width: 75px;
	display: inline-block
}
div.dataTables_wrapper div.dataTables_filter {
	text-align: right
}
div.dataTables_wrapper div.dataTables_filter label {
	font-weight: 400;
	white-space: nowrap;
	text-align: left
}
div.dataTables_wrapper div.dataTables_filter input {
	margin-left: .5em;
	display: inline-block;
	width: auto
}
div.dataTables_wrapper div.dataTables_info {
	white-space: nowrap
}
div.dataTables_wrapper div.dataTables_paginate {
	margin: 0;
	white-space: nowrap;
	text-align: right
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination {
	margin: 2px 0;
	white-space: nowrap
}
div.dataTables_wrapper div.dataTables_processing {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 200px;
	margin-left: -100px;
	margin-top: -26px;
	text-align: center;
	padding: 1em 0
}
table.dataTable thead>tr>td.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc {
	padding-right: 30px
}
table.dataTable thead>tr>td:active, table.dataTable thead>tr>th:active {
	outline: none
}
table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_asc_disabled, table.dataTable thead .sorting_desc, table.dataTable thead .sorting_desc_disabled {
	cursor: pointer;
	position: relative
}
table.dataTable thead .sorting:after, table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc_disabled:after, table.dataTable thead .sorting_desc_disabled:before {
	position: absolute;
	right: .5rem;
	bottom: 1rem;
	display: block;
	font-family: Font Awesome\ 5 Free;
	font-weight: 900;
	font-style: normal;
	font-variant: normal;
	text-rendering: auto;
	line-height: 1;
	opacity: .3;
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased
}
table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc_disabled:before {
	content: "\f0de"
}
table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_desc_disabled:after {
	content: "\f0dd"
}
table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_desc:after {
	opacity: 1
}
table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc_disabled:after {
	opacity: 0
}
div.dataTables_scrollHead table.dataTable {
	margin-bottom: 0!important
}
div.dataTables_scrollBody table {
	border-top: none;
	margin-top: 0!important;
	margin-bottom: 0!important
}
div.dataTables_scrollBody table thead .sorting:after, div.dataTables_scrollBody table thead .sorting_asc:after, div.dataTables_scrollBody table thead .sorting_desc:after {
	display: none
}
div.dataTables_scrollBody table tbody tr:first-child td, div.dataTables_scrollBody table tbody tr:first-child th {
	border-top: none
}
div.dataTables_scrollFoot table {
	margin-top: 0!important;
	border-top: none
}

@media screen and (max-width:767px) {
div.dataTables_wrapper div.dataTables_filter, div.dataTables_wrapper div.dataTables_length, div.dataTables_wrapper div.dataTables_paginate {
	text-align: center
}
}
table.dataTable.table-condensed>thead>tr>th {
	padding-right: 20px
}
table.dataTable.table-condensed .sorting:after, table.dataTable.table-condensed .sorting_asc:after, table.dataTable.table-condensed .sorting_desc:after {
	top: 6px;
	right: 6px
}
table.table-bordered.dataTable td, table.table-bordered.dataTable th {
	border-left-width: 0
}
table.table-bordered.dataTable td:last-child, table.table-bordered.dataTable th:last-child {
	border-right-width: 0
}
div.dataTables_scrollHead table.table-bordered, table.table-bordered.dataTable tbody td, table.table-bordered.dataTable tbody th {
	border-bottom-width: 0
}
div.table-responsive>div.dataTables_wrapper>div.row {
	margin: 0
}
div.table-responsive>div.dataTables_wrapper>div.row>div[class^=col-]:first-child {
	padding-left: 0
}
div.table-responsive>div.dataTables_wrapper>div.row>div[class^=col-]:last-child {
	padding-right: 0
}
div.dt-button-info {
	margin-top: 0;
	top: 3.5rem;
	color: #fff;
	background-color: #222230;
	border: none;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16);
	border-radius: .25rem
}
div.dt-button-info h2 {
	border-bottom: none;
	background-color: #222230
}
table.dataTable>tbody>tr.child {
	background-color: #f6f7f9
}
table.dataTable>tbody>tr.child:hover {
	background-color: #f6f7f9!important
}
table.dataTable>tbody>tr.child ul.dtr-details {
	display: block
}
table.dataTable>tbody>tr.child ul.dtr-details>li {
	border-color: #ecedf1
}
table.dataTable.dtr-inline.collapsed>tbody>tr[role=row]>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr[role=row]>th:first-child:before {
	cursor: pointer;
	top: 1rem;
	content: "\f105";
	font-family: Font Awesome\ 5 Free;
	font-weight: 900;
	font-style: normal;
	font-variant: normal;
	text-rendering: auto;
	line-height: 1;
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	background-color: transparent;
	color: inherit;
	border: 0;
	box-shadow: none;
	transform: rotate(0);
	transform-origin: center center;
	transition: transform .15s linear
}
table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th:first-child:before {
	background-color: transparent;
	transform: rotate(90deg)
}
.plyr input[type=range]:active::-webkit-slider-thumb {
background:<?= $themeColor; ?>
}
.plyr input[type=range]:active::-moz-range-thumb {
background:<?= $themeColor; ?>
}
.plyr input[type=range]:active::-ms-thumb {
background:<?= $themeColor; ?>
}
.plyr--audio .plyr__control.plyr__tab-focus, .plyr--audio .plyr__control:hover, .plyr--audio .plyr__control[aria-expanded=true], .plyr--video .plyr__controls .plyr__control.plyr__tab-focus, .plyr--video .plyr__controls .plyr__control:hover, .plyr--video .plyr__controls .plyr__control[aria-expanded=true], .plyr__control--overlaid, .plyr__control--overlaid:focus, .plyr__control--overlaid:hover {
	background: <?= $themeColor; ?>
}
.plyr--full-ui input[type=range] {
	color: <?= $themeColor; ?>
}
.plyr--audio .plyr__controls {
	border: 0
}
.sortable-ghost {
	opacity: .5
}
.dd, .dd-list {
	position: relative
}
.dd-list {
	margin: 0;
	padding: 0;
	display: flex;
	flex-direction: column;
	list-style: none
}
.dd-list .dd-list {
	padding-left: 1.25rem
}
.dd-list .dd-list .dd-handle {
	border-left: 1px solid #ecedf1
}
.dd-item {
	position: relative;
	display: flex;
	flex-direction: column
}
.dd-item:first-child>.dd-nodrag {
	margin-top: 2rem
}
.dd-item>button {
	position: absolute;
	left: 2rem;
	top: 1.125rem;
	padding: 0 0 0 20px;
	width: 20px;
	height: 20px;
	border: 0;
	line-height: 1;
	white-space: nowrap;
	vertical-align: middle;
	background-color: transparent;
	background-repeat: no-repeat;
	background-position: 50%;
	background-size: 10px;
	overflow: hidden
}
.dd-item>button.dd-expand {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg aria-hidden='true' data-prefix='fas' data-icon='caret-right' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-caret-right fa-w-10 fa-3x'%3E%3Cpath fill='currentColor' d='M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z'/%3E%3C/svg%3E")
}
.dd-item>button.dd-collapse {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg aria-hidden='true' data-prefix='fas' data-icon='caret-down' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-caret-down fa-w-10 fa-3x'%3E%3Cpath fill='currentColor' d='M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z'/%3E%3C/svg%3E")
}
.dd-item>button+.dd-handle {
	padding-left: 2.5rem
}
.dd-item>button+.dd-handle>.drag-indicator {
	transform: translate3d(-2rem, 0, 0);
	margin-right: .25rem
}
.dd-footer {
	display: block;
	background-color: #f6f7f9
}
.dd-handle {
	margin-bottom: -1px;
	padding: .75rem 1rem;
	display: flex;
	align-items: center;
	background-color: #fff;
	border-top: 1px solid #ecedf1;
	border-bottom: 1px solid #ecedf1
}
.dd-handle:focus, .dd-handle:hover {
	text-decoration: none
}
.dd-collapsed .dd-collapse, .dd-collapsed .dd-list, .dd-expand {
	display: none
}
.dd-collapsed .dd-expand {
	display: block
}
.dd-placeholder {
	min-height: 30px;
	background: rgba(52,108,176,.12);
	border: 1px dashed <?= $themeColor; ?>
}
.dd-empty, .dd-placeholder {
	position: relative;
	margin: 0;
	padding: 0
}
.dd-empty {
	min-height: 56px;
	background-color: #f6f7f9;
	border: 1px dashed rgba(34,34,48,.1)
}
.dd-dragel {
	position: absolute;
	pointer-events: none;
	z-index: 2000
}
.dd-dragel>.dd-item .dd-handle {
	margin-top: 0
}
.dd-nochildren .dd-placeholder {
	display: none
}
.jstree .fa {
	font-size: 1.1em
}
.jstree-anchor {
	color: inherit
}
.jstree-default .jstree-anchor {
	margin-top: 0
}
.jstree-default .jstree-checkbox {
	margin-top: -2px
}
.jstree-default .jstree-hovered, .jstree-default .jstree-wholerow-hovered {
	color: <?= $themeColor; ?>;
	background: transparent;
	box-shadow: none;
	background-image: none
}
.jstree-default .jstree-clicked, .jstree-default .jstree-wholerow-clicked {
	color: #2e609c;
	background: rgba(52,108,176,.2);
	box-shadow: inset 0 0 1px <?= $themeColor; ?>;
	background-image: none
}
.jstree-default .jstree-disabled {
	color: #888c9b
}
.jstree-open>.jstree-anchor>.fa-folder:before {
	content: "\f07c"
}
.vakata-context, .vakata-context ul {
	float: left;
	box-shadow: 0 6px 12px rgba(20,20,31,.175);
	border: 1px solid rgba(34,34,48,.1);
	border-radius: 4px;
	background: #fff;
	list-style: none;
	text-align: left
}
.jstree-default .jstree-icon, .jstree-default .jstree-node {
	background-image: none
}
.jstree-default .jstree-node {
	margin-left: 21px
}
.jstree-default .jstree-icon {
	display: inline-block;
	color: #888c9b;
	font-style: normal;
	font-variant: normal;
	text-rendering: auto;
	line-height: 1;
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased
}
.jstree-default .jstree-ocl {
	padding-left: .5rem;
	font-family: Font Awesome\ 5 Free;
	font-weight: 900
}
.jstree-default .jstree-open>.jstree-ocl:before {
	content: "\f0d7"
}
.jstree-default .jstree-closed>.jstree-ocl:before {
	content: "\f0da"
}
.jstree-default .jstree-leaf>.jstree-ocl:before {
	content: ""
}
.jstree-default .jstree-clicked .jstree-checkbox {
	border-color: <?= $themeColor; ?>
}
.jstree-default .jstree-clicked .jstree-checkbox:after {
	content: "";
	position: absolute;
	left: 0;
	top: 0;
	width: 1rem;
	height: 1rem;
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%230179A8' width='8' height='8'%3E%3Cpath d='M6.41 1l-.69.72L2.94 4.5l-.81-.78L1.41 3 0 4.41l.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 1z'/%3E%3C/svg%3E");
	background-repeat: no-repeat;
	background-position: 35% 35%;
	background-size: 63% 63%
}
.jstree-default .jstree-checkbox {
	position: relative;
	background: linear-gradient(180deg, #fff, #f6f7f9);
	border: 1px solid #c6c9d5;
	box-shadow: 0 1px 0 0 rgba(34,34,48,.05);
	border-radius: .25rem
}
.jstree-default .jstree-checkbox:empty {
	margin: .25rem .25rem .25rem .125rem;
	width: 1rem;
	height: 1rem
}
.jstree-default .jstree-checkbox.jstree-undetermined:after {
	content: "";
	position: absolute;
	left: 0;
	top: 0;
	width: 1rem;
	height: 1rem;
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%230179A8' width='8' height='8'%3E%3Cpath d='M0 3v2h8V3H0z'/%3E%3C/svg%3E");
	background-repeat: no-repeat;
	background-position: 35% 35%;
	background-size: 63% 63%
}
.jstree-default.jstree-checkbox-no-clicked .jstree-clicked.jstree-hovered {
	background: transparent
}
.jstree-default .jstree-search {
	color: #363642
}
.twitter-typeahead {
	width: 100%
}
.tt-dropdown-menu, .tt-menu {
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 10rem;
	width: 100%;
	padding: .5rem .75rem;
	margin: .5rem 0 0;
	font-size: 1rem;
	color: #363642;
	text-align: left;
	list-style: none;
	background-color: hsla(0,0%,100%,.98);
	background-clip: padding-box;
	border: 0;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16);
	-webkit-animation-duration: .2s;
	animation-duration: .2s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
	border-radius: .25rem
}

@media (min-width:768px) {
.tt-dropdown-menu, .tt-menu {
	font-size: .875rem
}
}
.tt-dropdown-menu.tt-open, .tt-menu.tt-open {
	-webkit-animation-name: showDropdown;
	animation-name: showDropdown
}
.tt-dropdown-menu .empty-message, .tt-menu .empty-message {
	padding: .5rem 1rem;
	text-align: center;
	color: #888c9b
}
.tt-hint {
	color: #888c9b;
	padding-left: .75rem!important;
	border-width: 1px!important
}
.tt-suggestion {
	display: block;
	width: 100%;
	padding: .5rem .75rem;
	clear: both;
	font-weight: 400;
	color: #191927;
	text-align: inherit;
	white-space: nowrap;
	background-color: transparent;
	border: 0;
	border-radius: .25rem;
	cursor: default
}
.tt-suggestion strong {
	color: <?= $themeColor; ?>
}
.tt-suggestion.tt-cursor, .tt-suggestion:focus, .tt-suggestion:hover {
	text-decoration: none;
	color: #fff;
	background-color: <?= $themeColor; ?>
}
.tt-suggestion.tt-cursor strong, .tt-suggestion:focus strong, .tt-suggestion:hover strong {
	color: inherit
}
.tt-menu-header {
	display: block;
	padding: .5rem 0;
	margin-bottom: 0;
	font-size: .875rem;
	color: #888c9b;
	white-space: nowrap
}
.has-typeahead-scrollable .tt-menu {
	max-height: 220px;
	overflow-y: auto
}
:not(.input-group)>.bootstrap-select.custom-select:not([class*=col-]) {
	width: 100%
}
.bootstrap-select a:not([href]) {
	color: #191927
}
.bootstrap-select a:not([href]).active, .bootstrap-select a:not([href]).selected, .bootstrap-select a:not([href]):active, .bootstrap-select a:not([href]):focus, .bootstrap-select a:not([href]):hover {
	color: #fff;
	background-color: <?= $themeColor; ?>
}
.bootstrap-select .dropdown-toggle.custom-select:after {
	display: none
}
.bootstrap-select .dropdown-toggle.custom-select:focus {
	outline: 0!important;
	outline-offset: 0
}
.bootstrap-select .dropdown-toggle.bs-placeholder, .bootstrap-select .dropdown-toggle.bs-placeholder:active, .bootstrap-select .dropdown-toggle.bs-placeholder:focus, .bootstrap-select .dropdown-toggle.bs-placeholder:hover {
	color: #888c9b
}
.bootstrap-select>select.mobile-device:focus+.dropdown-toggle.custom-select {
	outline: 0!important;
	outline-offset: 0
}
.bootstrap-select .dropdown-menu {
	overflow: visible!important
}
.bootstrap-select .dropdown-menu li a {
	outline: 0
}
.bootstrap-select .dropdown-menu li.disabled a {
	color: #888c9b
}
.bootstrap-select .dropdown-menu .dropdown-item .text {
	font-size: inherit;
	color: inherit
}
.select2-dropdown {
	z-index: 1051
}
.select2-container .select2-selection--single {
	height: calc(1.5em + .75rem + 2px);
	background: linear-gradient(180deg, #fff, #f6f7f9);
	transition: box-shadow .2s ease-in-out, border-color .2s ease-in-out
}

@media (min-width:768px) {
.select2-container .select2-selection--single {
	height: 2.25rem
}
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
	padding-left: .75rem;
	padding-right: 2rem;
	line-height: 2.25rem;
	color: #363642
}

@media (min-width:768px) {
.select2-container--default .select2-selection--single .select2-selection__rendered {
	line-height: 2.25rem
}
}
.select2-container--default .select2-selection--single .select2-selection__placeholder, .select2-container--disabled .select2-selection--multiple .select2-selection__choice, .select2-container--disabled .select2-selection--single .select2-selection__placeholder {
	color: #888c9b
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
	right: 0;
	height: 2.25rem;
	width: 2.5rem;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}

@media (min-width:768px) {
.select2-container--default .select2-selection--single .select2-selection__arrow {
	height: calc(2.25rem - 2px)
}
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
	border-top-color: #888c9b
}
.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
	border-bottom-color: #888c9b
}
.select2-container .select2-selection--multiple {
	background-color: #fff;
	min-height: 2.25rem;
	box-shadow: inset 0 1px 0 0 rgba(34,34,48,.05)
}

@media (min-width:768px) {
.select2-container .select2-selection--multiple {
	min-height: 2.25rem
}
}
.select2-container--default .select2-selection--multiple, .select2-container--default .select2-selection--single {
	border-color: #c6c9d5
}
.select2-container--default .select2-selection--multiple .user-avatar, .select2-container--default .select2-selection--single .user-avatar {
	margin-top: -.25rem
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered {
	display: block;
	padding: 2px .75rem
}
.select2-container--default.select2-container--focus .select2-selection--multiple, .select2-container--default.select2-container--open .select2-selection--multiple, .select2-container--focus .select2-selection--single, .select2-container--open .select2-selection--single {
	outline: 0;
	border-color: <?= $themeColor; ?>;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.select2-container--default.select2-container--disabled .select2-selection--multiple, .select2-container--default.select2-container--disabled .select2-selection--single {
	cursor: not-allowed;
	border-color: #c6c9d5;
	background-color: #f6f7f9;
	box-shadow: none
}
.select2-container--default.select2-container--disabled .select2-selection--multiple .select2-search__field, .select2-container--default.select2-container--disabled .select2-selection--single .select2-search__field {
	cursor: not-allowed
}
.select2-container--open .select2-dropdown--above {
	margin-top: 1px;
	box-shadow: -1px -1px 0 0 <?= $themeColor; ?>, 1px 0 0 0 <?= $themeColor; ?>
}
.select2-container--open .select2-dropdown--below {
	margin-top: -1px;
	box-shadow: -1px 1px 0 0 <?= $themeColor; ?>, 1px 0 0 0 <?= $themeColor; ?>
}
.select2-container--default .select2-selection--single .select2-selection__clear {
	color: #888c9b;
	z-index: 2;
	font-size: 1rem
}
.macos .select2-container--default .select2-selection--single .select2-selection__clear {
	top: -1px
}

@media (min-width:768px) {
.macos .select2-container--default .select2-selection--single .select2-selection__clear {
	top: -2px
}
}
.select2-container--default .select2-selection--single .select2-selection__clear:focus, .select2-container--default .select2-selection--single .select2-selection__clear:hover {
	color: #363642
}
.select2-dropdown {
	background-color: #fff;
	border-color: <?= $themeColor; ?>;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.select2-container--default .select2-search--dropdown .select2-search__field {
	padding: .375rem .75rem;
	color: #363642;
	background-color: #fff;
	border-color: #c6c9d5;
	border-radius: .25rem;
	box-shadow: inset 0 1px 0 0 rgba(34,34,48,.05)
}
.select2-container--default .select2-search--dropdown .select2-search__field:focus {
	outline: 0;
	border-color: #c6c9d5
}
.select2-container--default .select2-results__option[aria-selected=true] {
	background-color: #e6e8ed
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
	background-color: <?= $themeColor; ?>
}
.select2-container--default .select2-results__option--highlighted[aria-selected] .text-muted {
	color: inherit!important
}
.select2-container--default .select2-results__group, .select2-results__option {
	padding-right: .75rem;
	padding-left: .75rem
}
.select2-container .select2-search--inline {
	margin-top: 2px
}
.select2-container .select2-search--inline .select2-search__field {
	margin-top: 3px
}
.select2-container .select2-search--inline .select2-search__field::-webkit-input-placeholder {
color:#888c9b
}
.select2-container .select2-search--inline .select2-search__field::-moz-placeholder {
color:#888c9b
}
.select2-container .select2-search--inline .select2-search__field:-ms-input-placeholder {
color:#888c9b
}
.select2-container .select2-search--inline .select2-search__field::-ms-input-placeholder {
color:#888c9b
}
.select2-container .select2-search--inline .select2-search__field::placeholder {
color:#888c9b
}
.select2-container--default .select2-search--inline .select2-search__field {
	color: #363642
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
	margin: 3px 12px 3px -6px;
	background-color: #e6e8ed;
	border-color: #e6e8ed
}
.select2-container--default .select2-selection--multiple .select2-selection__choice+.select2-search {
	margin-left: -6px
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
	margin-right: auto;
	margin-left: .25rem;
	position: relative;
	top: 4px;
	width: 1rem;
	height: 1rem;
	font-size: 1rem;
	line-height: 1rem;
	float: right;
	color: #fff;
	background-color: #a6abbd;
	text-align: center;
	border-radius: .5rem
}
.macos .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
	line-height: .875rem
}

@media (min-width:768px) {
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
	top: 3px
}
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:focus, .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
	color: #fff;
	background-color: #888c9b
}
.custom-select.is-invalid+.select2-container--default .select2-selection--multiple, .custom-select.is-invalid+.select2-container--default .select2-selection--single, .form-control.is-invalid+.select2-container--default .select2-selection--multiple, .form-control.is-invalid+.select2-container--default .select2-selection--single, .was-validated .custom-select:invalid+.select2-container--default .select2-selection--multiple, .was-validated .custom-select:invalid+.select2-container--default .select2-selection--single, .was-validated .form-control:invalid+.select2-container--default .select2-selection--multiple, .was-validated .form-control:invalid+.select2-container--default .select2-selection--single {
border-color:#ff0538
}
.custom-select.is-invalid+.select2-container--default.select2-container--focus .select2-selection--multiple, .custom-select.is-invalid+.select2-container--focus .select2-selection--single, .form-control.is-invalid+.select2-container--default.select2-container--focus .select2-selection--multiple, .form-control.is-invalid+.select2-container--focus .select2-selection--single, .was-validated .custom-select:invalid+.select2-container--default.select2-container--focus .select2-selection--multiple, .was-validated .custom-select:invalid+.select2-container--focus .select2-selection--single, .was-validated .form-control:invalid+.select2-container--default.select2-container--focus .select2-selection--multiple, .was-validated .form-control:invalid+.select2-container--focus .select2-selection--single {
outline:0;
border-color:#ff0538;
box-shadow:0 0 0 1px #ff0538
}
.custom-select.is-invalid+.select2-container--default.select2-container--open .select2-selection--multiple, .custom-select.is-invalid+.select2-container--open .select2-selection--single, .form-control.is-invalid+.select2-container--default.select2-container--open .select2-selection--multiple, .form-control.is-invalid+.select2-container--open .select2-selection--single, .was-validated .custom-select:invalid+.select2-container--default.select2-container--open .select2-selection--multiple, .was-validated .custom-select:invalid+.select2-container--open .select2-selection--single, .was-validated .form-control:invalid+.select2-container--default.select2-container--open .select2-selection--multiple, .was-validated .form-control:invalid+.select2-container--open .select2-selection--single {
border-color:<?= $themeColor; ?>
}
.custom-select.is-valid+.select2-container--default .select2-selection--multiple, .custom-select.is-valid+.select2-container--default .select2-selection--single, .form-control.is-valid+.select2-container--default .select2-selection--multiple, .form-control.is-valid+.select2-container--default .select2-selection--single, .was-validated .custom-select:valid+.select2-container--default .select2-selection--multiple, .was-validated .custom-select:valid+.select2-container--default .select2-selection--single, .was-validated .form-control:valid+.select2-container--default .select2-selection--multiple, .was-validated .form-control:valid+.select2-container--default .select2-selection--single {
border-color:#097b0a
}
.custom-select.is-valid+.select2-container--default.select2-container--focus .select2-selection--multiple, .custom-select.is-valid+.select2-container--focus .select2-selection--single, .form-control.is-valid+.select2-container--default.select2-container--focus .select2-selection--multiple, .form-control.is-valid+.select2-container--focus .select2-selection--single, .was-validated .custom-select:valid+.select2-container--default.select2-container--focus .select2-selection--multiple, .was-validated .custom-select:valid+.select2-container--focus .select2-selection--single, .was-validated .form-control:valid+.select2-container--default.select2-container--focus .select2-selection--multiple, .was-validated .form-control:valid+.select2-container--focus .select2-selection--single {
outline:0;
border-color:#097b0a;
box-shadow:0 0 0 1px #097b0a
}
.custom-select.is-valid+.select2-container--default.select2-container--open .select2-selection--multiple, .custom-select.is-valid+.select2-container--open .select2-selection--single, .form-control.is-valid+.select2-container--default.select2-container--open .select2-selection--multiple, .form-control.is-valid+.select2-container--open .select2-selection--single, .was-validated .custom-select:valid+.select2-container--default.select2-container--open .select2-selection--multiple, .was-validated .custom-select:valid+.select2-container--open .select2-selection--single, .was-validated .form-control:valid+.select2-container--default.select2-container--open .select2-selection--multiple, .was-validated .form-control:valid+.select2-container--open .select2-selection--single {
border-color:<?= $themeColor; ?>
}
.form-label-group .select2-container .select2-selection--single {
	padding-top: 1.25rem;
	padding-bottom: .25rem;
	height: auto
}
.form-label-group .select2-container .select2-selection--multiple {
	padding-top: .75rem;
	padding-bottom: .625rem;
	height: auto
}
.form-label-group .select2-container .select2-search--inline, .form-label-group .select2-container .select2-search--inline .select2-search__field {
	margin-top: 0;
	padding: 0
}
.form-label-group .select2-container--default .select2-selection--single .select2-selection__rendered {
	line-height: 1.5
}
.form-label-group .select2-container--default .select2-selection--single .select2-selection__arrow {
	bottom: 0;
	height: auto
}
.form-label-group .select2-container--default .select2-selection--single .select2-selection__clear {
	top: -.5rem
}
.form-label-group .select2-container--default .select2-selection--multiple .select2-selection__rendered {
	padding-top: 0;
	padding-bottom: 0
}
.form-label-group .select2-container--default .select2-selection--multiple .select2-selection__choice {
	margin-top: 0;
	margin-bottom: 0
}
.form-label-group>[data-toggle=select2][multiple]~label {
	display: inline-block;
	width: auto;
	padding: 0;
	margin-left: .75rem;
	background-color: #fff;
	transform: translate3d(0, -50%, 0)
}
.atwho-view, .tribute-container {
	z-index: 1051;
	min-width: 10rem;
	padding: .5rem 0;
	margin: .125rem 0 0;
	font-size: 1rem;
	color: #363642;
	text-align: left;
	list-style: none;
	background-color: hsla(0,0%,100%,.98);
	background-clip: padding-box;
	border: 0;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16);
	-webkit-animation-duration: .2s;
	animation-duration: .2s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
	border-radius: .25rem
}

@media (min-width:768px) {
.atwho-view, .tribute-container {
	font-size: .875rem
}
}
.atwho-view ul li, .tribute-container li {
	display: block;
	width: 100%;
	padding: .5rem 1rem;
	clear: both;
	font-weight: 400;
	color: #191927;
	text-align: inherit;
	white-space: nowrap;
	background-color: transparent;
	border: 0
}
.tribute-container {
	margin-top: .5rem
}
.tribute-container ul {
	background-color: inherit;
	margin-top: 0
}
.tribute-container li span {
	color: #f7c46c
}
.tribute-container li.highlight, .tribute-container li:focus, .tribute-container li:hover {
	text-decoration: none;
	color: #fff;
	background-color: <?= $themeColor; ?>
}
.tribute-container li.highlight span, .tribute-container li:focus span, .tribute-container li:hover span {
	color: inherit
}
.tribute-inline>.tribute-container {
	position: relative!important;
	top: 0!important;
	left: 0!important;
	box-shadow: none
}
.atwho-view ul li {
	border-bottom: none
}
.atwho-view strong {
	color: #f7c46c
}
.atwho-view .cur {
	color: #fff;
	background-color: <?= $themeColor; ?>
}
.atwho-view .cur strong {
	color: inherit
}
.flatpickr-calendar {
	background-color: hsla(0,0%,100%,.98);
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16)
}
.flatpickr-calendar.arrowTop:before {
	border-bottom-color: rgba(20,20,31,.15)
}
.flatpickr-calendar.arrowTop:after {
	border-bottom-color: hsla(0,0%,100%,.98)
}
.flatpickr-calendar.arrowBottom:before {
	border-top-color: hsla(0,0%,100%,.98)
}
.flatpickr-calendar.arrowBottom:after {
	border-top-color: rgba(20,20,31,.15)
}
.flatpickr-calendar.inline {
	background-color: #fff;
	border: 1px solid #c6c9d5;
	box-shadow: none
}
.flatpickr-calendar.open {
	z-index: 1055
}
.flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
	border-top: none
}
.dropdown-menu .flatpickr-calendar {
	width: auto!important;
	border-radius: 0;
	border-width: 1px 0 0
}
.flatpickr-innerContainer+.flatpickr-time {
	border-top: 1px solid #ecedf1!important
}
.flatpickr-time .flatpickr-am-pm, .flatpickr-time input {
	color: #363642
}
.flatpickr-time .flatpickr-am-pm:focus, .flatpickr-time .flatpickr-am-pm:hover, .flatpickr-time input:focus, .flatpickr-time input:hover {
	background-color: #fff
}
.flatpickr-time .numInputWrapper:first-child input {
	border-radius: .25rem 0 0 .25rem
}
.flatpickr-time .numInputWrapper span.arrowUp:after {
	border-bottom-color: #888c9b
}
.flatpickr-time .numInputWrapper span.arrowDown:after {
	border-top-color: #888c9b
}
.flatpickr-months {
	align-items: center
}
.flatpickr-months .flatpickr-month, .flatpickr-months .flatpickr-next-month, .flatpickr-months .flatpickr-prev-month {
	color: #363642;
	fill: #363642
}
.flatpickr-months .flatpickr-next-month, .flatpickr-months .flatpickr-prev-month {
	position: static;
	height: auto
}
.flatpickr-months .flatpickr-next-month svg, .flatpickr-months .flatpickr-prev-month svg {
	width: 10px;
	height: 10px
}
.flatpickr-months .flatpickr-next-month:focus svg, .flatpickr-months .flatpickr-next-month:hover svg, .flatpickr-months .flatpickr-prev-month:focus svg, .flatpickr-months .flatpickr-prev-month:hover svg {
	fill: <?= $themeColor; ?>
}
.flatpickr-month {
	display: flex;
	color: #363642;
	fill: #363642;
	justify-content: center;
	align-items: center;
	height: auto
}
.flatpickr-current-month, .flatpickr-next-month, .flatpickr-prev-month {
	position: relative;
	width: auto;
	height: auto
}
.flatpickr-current-month {
	display: flex;
	flex: 1;
	align-items: center;
	justify-content: center;
	padding: 0;
	left: auto;
	font-size: .75rem;
	font-weight: 600;
	text-transform: uppercase
}
.flatpickr-current-month input.cur-year {
	font-weight: inherit
}
.flatpickr-current-month .numInputWrapper span.arrowUp:after {
	border-bottom-color: #888c9b
}
.flatpickr-current-month .numInputWrapper span.arrowDown:after {
	border-top-color: #888c9b
}
.flatpickr-weekdays {
	height: auto
}
span.flatpickr-weekday {
	padding: .5rem 0;
	font-size: inherit;
	font-weight: 400;
	color: inherit;
	text-decoration: underline;
	-webkit-text-decoration-style: dotted;
	text-decoration-style: dotted;
	border-color: rgba(34,34,48,.1);
	border-style: solid;
	border-width: 1px 1px 0 0
}
span.flatpickr-weekday:last-child {
	border-right: 1px solid transparent
}
.dayContainer {
	width: auto;
	max-width: none
}
.flatpickr-days {
	width: auto
}
.dropdown-menu .flatpickr-days {
	width: auto!important
}
.flatpickr-day {
	padding: .5rem 0;
	height: auto;
	max-width: none;
	line-height: 1;
	color: #363642;
	border-width: 1px 1px 0 0;
	border-color: rgba(34,34,48,.1);
	border-radius: 0
}
.flatpickr-day:nth-child(7n+7) {
	border-right: none
}
.rangeMode .flatpickr-day {
	margin-top: 0
}
.flatpickr-day.inRange {
	box-shadow: none
}
.flatpickr-day.today {
	box-shadow: inset 0 0 0 1px <?= $themeColor; ?>, inset 0 0 0 3px #fff
}
.flatpickr-day.today, .flatpickr-day.today:focus, .flatpickr-day.today:hover {
	color: #fff;
	background-color: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.flatpickr-day.disabled, .flatpickr-day.disabled:hover, .flatpickr-day.nextMonthDay, .flatpickr-day.notAllowed, .flatpickr-day.notAllowed.nextMonthDay, .flatpickr-day.notAllowed.prevMonthDay, .flatpickr-day.prevMonthDay {
	color: #888c9b;
	border-color: rgba(34,34,48,.1);
	opacity: .8
}
.flatpickr-day.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day.nextMonthDay.today.inRange, .flatpickr-day.nextMonthDay:focus, .flatpickr-day.nextMonthDay:hover, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.today.inRange, .flatpickr-day:focus, .flatpickr-day:hover, .flatpickr-time .flatpickr-am-pm:focus, .flatpickr-time .flatpickr-am-pm:hover, .numInputWrapper:hover {
	color: #2e609c;
	background: rgba(52,108,176,.12);
	border-color: rgba(52,108,176,.12)
}
.flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)), .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)), .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)) {
box-shadow:-10px 0 0 rgba(52,108,176,.2)
}
.flatpickr-day.endRange, .flatpickr-day.endRange.inRange, .flatpickr-day.endRange.nextMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.endRange:focus, .flatpickr-day.endRange:hover, .flatpickr-day.selected, .flatpickr-day.selected.inRange, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.selected:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange, .flatpickr-day.startRange.inRange, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.startRange:focus, .flatpickr-day.startRange:hover {
	color: #fff;
	background: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.flatpickr-day.endRange.endRange, .flatpickr-day.endRange.startRange, .flatpickr-day.selected.endRange, .flatpickr-day.selected.startRange, .flatpickr-day.startRange.endRange, .flatpickr-day.startRange.startRange {
	border-radius: 0
}
.flatpickr-day.endRange.startRange+.endRange, .flatpickr-day.selected.startRange+.endRange, .flatpickr-day.startRange.startRange+.endRange {
	box-shadow: -10px 0 0 <?= $themeColor; ?>
}
.flatpickr-day.week.selected {
	box-shadow: none
}
.flatpickr-monthSelect-months {
	margin: 10px 1px 3px;
	flex-wrap: wrap
}
.flatpickr-monthSelect-month {
	background: none;
	border: 0;
	border-radius: 2px;
	color: #363642;
	cursor: pointer;
	display: inline-block;
	font-weight: 400;
	margin: .5px;
	justify-content: center;
	padding: 10px;
	position: relative;
	text-align: center;
	width: 33%
}
.flatpickr-monthSelect-theme-dark {
	background: #222230
}
.flatpickr-monthSelect-theme-dark .flatpickr-current-month input.cur-year {
	color: #f6f7f9
}
.flatpickr-monthSelect-theme-dark .flatpickr-months .flatpickr-next-month, .flatpickr-monthSelect-theme-dark .flatpickr-months .flatpickr-prev-month {
	color: #f6f7f9;
	fill: #f6f7f9
}
.flatpickr-monthSelect-theme-dark .flatpickr-monthSelect-month {
	color: rgba(246,247,249,.95)
}
.flatpickr-monthSelect-month:focus, .flatpickr-monthSelect-month:hover, .flatpickr-monthSelect-theme-dark .flatpickr-monthSelect-month:focus, .flatpickr-monthSelect-theme-dark .flatpickr-monthSelect-month:hover {
	color: #2e609c;
	background: rgba(52,108,176,.12);
	border-color: rgba(52,108,176,.12)
}
.flatpickr-monthSelect-month.selected {
	color: #fff;
	background: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.flatpickr-monthSelect-theme-dark .flatpickr-monthSelect-month.selected {
	color: #fff;
	background: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>;
	box-shadow: none
}
.flatpickr-confirm {
	height: 40px;
	max-height: 0;
	visibility: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
	cursor: pointer;
	background-color: hsla(0,0%,100%,.98);
	border-top: 1px solid #ecedf1;
	border-bottom-right-radius: .25rem;
	border-bottom-left-radius: .25rem
}
.flatpickr-confirm svg path {
	fill: inherit
}
.flatpickr-confirm.darkTheme {
	color: #fff;
	fill: #fff
}
.flatpickr-confirm.visible {
	max-height: 40px;
	visibility: visible
}
.colorpicker {
	color: #363642;
	background-color: #fff;
	border: 0;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16)
}
.colorpicker.colorpicker-inline {
	border: 1px solid rgba(34,34,48,.1);
	box-shadow: none
}
.colorpicker-bar {
	line-height: 1rem
}
.colorpicker-2x .colorpicker-saturation {
	width: 200px;
	height: 200px
}
.colorpicker-2x .colorpicker-alpha, .colorpicker-2x .colorpicker-hue {
	width: 30px;
	height: 200px
}
.colorpicker-2x .colorpicker-preview, .colorpicker-2x .colorpicker-preview div {
	height: 30px;
	font-size: 16px;
	line-height: 160%
}
.colorpicker-2x .colorpicker-saturation .colorpicker-guide, .colorpicker-2x .colorpicker-saturation .colorpicker-guide i {
	height: 10px;
	width: 10px;
	border-radius: 10px
}
.colorpicker-input-addon {
	outline: 0
}
.modal-body>.colorpicker-element {
	margin: 1rem 0
}
.fileinput-button, .fileinput-dropzone {
	position: relative;
	overflow: hidden;
	display: inline-block
}
.fileinput-button input, .fileinput-dropzone input {
	position: absolute;
	top: 0;
	left: 0;
	margin: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	direction: ltr;
	cursor: pointer;
	z-index: 2
}
.fileinput-button:focus .fileinput-button-label, .fileinput-button:hover .fileinput-button-label, .fileinput-dropzone:focus .fileinput-button-label, .fileinput-dropzone:hover .fileinput-button-label {
	opacity: 1
}
.fileinput-dropzone {
	display: block;
	padding: 2.5rem;
	text-align: center;
	color: #888c9b;
	border-radius: .25rem;
	border: 2px dashed rgba(34,34,48,.1);
	transition: all .2s
}
.fileinput-dropzone.hover {
	color: #363642;
	border-color: <?= $themeColor; ?>
}
.fileinput-button-label {
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 1rem;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: rgba(52,108,176,.86);
	color: #fff;
	font-size: .875rem;
	text-align: center;
	opacity: 0;
	cursor: pointer;
	z-index: 1;
	transition: opacity .2s
}
.bootstrap-touchspin .input-group-btn-vertical>.btn {
	border: 0
}
.nouislider-wrapper {
	margin-bottom: 1.25rem
}
.noUi-handle {
	padding: 0;
	display: inline-block;
	background-color: #fff;
	color: #fff;
	border: 4px solid <?= $themeColor; ?>;
	vertical-align: middle;
	border-radius: 1.25rem;
	line-height: 1;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	white-space: normal;
	transform-origin: center center;
	transition: box-shadow .15s;
	outline: 0
}
.noUi-handle:after, .noUi-handle:before {
	display: none
}
.noUi-handle:active, .noUi-handle:focus, .noUi-handle:hover {
	box-shadow: 0 0 0 4px rgba(52,108,176,.26)
}
.noUi-horizontal {
	height: 4px
}
.noUi-horizontal .noUi-handle {
	width: 1.25rem;
	height: 1.25rem;
	left: -12px;
	top: -8px
}
html:not([dir=rtl]) .noUi-horizontal .noUi-handle {
	right: -.625rem
}
.noUi-vertical {
	width: 4px
}
.noUi-vertical .noUi-handle {
	width: 1.25rem;
	height: 1.25rem;
	left: -12px;
	top: -12px
}
.noUi-target {
	background-color: #e6e8ed;
	border: 0;
	box-shadow: none
}
.noUi-connect {
	background-color: <?= $themeColor; ?>;
	box-shadow: none
}
.noUi-origin {
	left: 100%
}
.noUi-active, .noUi-handle {
	box-shadow: none
}
.noUi-pips {
	color: #888c9b;
	font-size: .875rem
}
.noUi-pips-horizontal {
	padding: 6px 0;
	height: 55px
}
.noUi-pips-vertical {
	padding: 0 6px;
	width: 55px
}
.noUi-marker, .noUi-marker-large, .noUi-marker-sub {
	background-color: #e6e8ed
}
.noUi-value-horizontal {
	margin-top: 4px
}
.noUi-value-vertical {
	margin-left: 4px
}
.noUi-tooltip {
	font-size: .875rem;
	color: #fff;
	border-color: transparent;
	background-color: #14141f;
	opacity: .9;
	border-radius: .25rem
}
.noUi-horizontal .noUi-tooltip {
	bottom: 200%
}
.noUi-vertical .noUi-tooltip {
	right: 200%
}
.noUi-primary .noUi-connect {
	background-color: <?= $themeColor; ?>
}
.noUi-primary .noUi-handle {
	border-color: <?= $themeColor; ?>
}
.noUi-primary .noUi-handle:active, .noUi-primary .noUi-handle:focus, .noUi-primary .noUi-handle:hover {
	box-shadow: 0 0 0 4px rgba(52,108,176,.26)
}
.noUi-success .noUi-connect {
	background-color: #097b0a
}
.noUi-success .noUi-handle {
	border-color: #097b0a
}
.noUi-success .noUi-handle:active, .noUi-success .noUi-handle:focus, .noUi-success .noUi-handle:hover {
	box-shadow: 0 0 0 4px rgba(0,162,138,.26)
}
.noUi-info .noUi-connect {
	background-color: #0179a8
}
.noUi-info .noUi-handle {
	border-color: #0179a8
}
.noUi-info .noUi-handle:active, .noUi-info .noUi-handle:focus, .noUi-info .noUi-handle:hover {
	box-shadow: 0 0 0 4px rgba(1,121,168,.26)
}
.noUi-warning .noUi-connect {
	background-color: #f7c46c
}
.noUi-warning .noUi-handle {
	border-color: #f7c46c
}
.noUi-warning .noUi-handle:active, .noUi-warning .noUi-handle:focus, .noUi-warning .noUi-handle:hover {
	box-shadow: 0 0 0 4px rgba(247,196,108,.26)
}
.noUi-danger .noUi-connect {
	background-color: #ff0538
}
.noUi-danger .noUi-handle {
	border-color: #ff0538
}
.noUi-danger .noUi-handle:active, .noUi-danger .noUi-handle:focus, .noUi-danger .noUi-handle:hover {
	box-shadow: 0 0 0 4px rgba(183,107,163,.26)
}
.noUi-dark .noUi-connect {
	background-color: #222230
}
.noUi-dark .noUi-handle {
	border-color: #222230
}
.noUi-dark .noUi-handle:active, .noUi-dark .noUi-handle:focus, .noUi-dark .noUi-handle:hover {
	box-shadow: 0 0 0 4px rgba(34,34,48,.26)
}
.noUi-target[disabled] .noUi-connect {
	background-color: #e6e8ed
}
.noUi-origin[disabled] .noUi-handle, .noUi-target[disabled] .noUi-handle {
	border-color: #e6e8ed;
	background-color: #f6f7f9
}
.note-editor.note-frame {
	border-color: rgba(34,34,48,.1);
	box-shadow: none
}
.card>.note-editor.note-frame {
	margin-bottom: 0;
	border: 0
}
.note-editor.note-frame .note-statusbar {
	background-color: #fff;
	border-color: rgba(20,20,31,.12)
}
.note-editor.note-frame .note-statusbar .note-resizebar .note-icon-bar {
	border-top-color: #888c9b
}
.note-editor.note-frame .modal:last-child .modal-footer p:last-child {
	margin-bottom: 0
}
.note-codable, .note-editing-area {
	min-height: 100px
}
.note-editor.note-frame .note-editing-area .note-editable {
	color: #363642;
	background-color: #fff
}
.note-editor.note-frame .note-editing-area .note-codable {
	color: #363642;
	background-color: #f6f7f9
}
.note-editor.note-airframe .note-editing-area .note-editable {
	color: inherit;
	background-color: inherit
}
.note-editor.note-airframe.fullscreen {
	padding: 1rem;
	height: 100%;
	background-color: #fff;
	overflow: auto
}
.note-editor.note-airframe.fullscreen .note-editing-area {
	overflow: visible
}
.note-editor.note-airframe.fullscreen .note-editing-area .note-editable {
	color: #363642;
	background-color: #fff
}
.note-placeholder {
	color: #888c9b
}
.note-group-image-url {
	overflow: initial!important
}
.card-header.note-toolbar, .note-popover .popover-content {
	background-color: #fff
}
.card-header.note-toolbar .dropdown-menu.note-check a i, .note-popover .popover-content .dropdown-menu.note-check a i {
	color: <?= $themeColor; ?>
}
.card-header.note-toolbar .note-color .dropdown-menu .note-palette .note-palette-title, .note-popover .popover-content .note-color .dropdown-menu .note-palette .note-palette-title {
	border-bottom-color: rgba(34,34,48,.1)
}
.card-header.note-toolbar .note-color .dropdown-menu .note-palette .note-color-reset, .note-popover .popover-content .note-color .dropdown-menu .note-palette .note-color-reset {
	margin-bottom: .5rem
}
.card-header.note-toolbar .note-color .dropdown-menu .note-palette .note-color-reset:hover, .note-popover .popover-content .note-color .dropdown-menu .note-palette .note-color-reset:hover {
	color: #2e609c;
	background-color: rgba(52,108,176,.08)
}
.note-toolbar {
	padding: 0 .5rem .5rem
}
.note-toolbar .note-btn {
	background-color: transparent;
	border-color: transparent
}
.ql-container {
	font-size: inherit;
	font-family: inherit
}
.ql-container.ql-snow, .ql-toolbar.ql-snow {
	border-color: rgba(34,34,48,.1)
}
.card>.ql-toolbar.ql-snow {
	border-width: 0 0 1px
}
.card>.ql-container.ql-snow {
	border-width: 0
}
.ql-editor.ql-blank:before {
	color: rgba(20,20,31,.6)
}
.ql-editor ul[data-checked=false]>li:before, .ql-editor ul[data-checked=true]>li:before {
	color: #888c9b
}
.ql-editor .ql-bg-black {
	background-color: #14141f
}
.ql-editor .ql-bg-red {
	background-color: #ea6759
}
.ql-editor .ql-bg-orange {
	background-color: #ec935e
}
.ql-editor .ql-bg-yellow {
	background-color: #f7c46c
}
.ql-editor .ql-bg-green {
	background-color: #097b0a
}
.ql-editor .ql-bg-blue {
	background-color: <?= $themeColor; ?>
}
.ql-editor .ql-bg-purple {
	background-color: #5f4b8b
}
.ql-editor .ql-color-white {
	color: #fff
}
.ql-editor .ql-color-red {
	color: #ea6759
}
.ql-editor .ql-color-orange {
	color: #ec935e
}
.ql-editor .ql-color-yellow {
	color: #f7c46c
}
.ql-editor .ql-color-green {
	color: #097b0a
}
.ql-editor .ql-color-blue {
	color: <?= $themeColor; ?>
}
.ql-editor .ql-color-purple {
	color: #5f4b8b
}
.ql-editor .ql-font-serif {
	font-family: -apple-system, BlinkMacSystemFont, Fira Sans, Helvetica Neue, Apple Color Emoji, sans-serif
}
.ql-editor .ql-font-monospace {
	font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
}
.ql-picker-label {
	outline: 0
}
.ql-snow.ql-toolbar .ql-picker-label.ql-active, .ql-snow .ql-toolbar .ql-picker-label.ql-active, .ql-snow.ql-toolbar .ql-picker-label.ql-selected, .ql-snow .ql-toolbar .ql-picker-label.ql-selected, .ql-snow.ql-toolbar .ql-picker-label:hover, .ql-snow .ql-toolbar .ql-picker-label:hover, .ql-snow.ql-toolbar button.ql-active, .ql-snow .ql-toolbar button.ql-active, .ql-snow.ql-toolbar button:focus, .ql-snow .ql-toolbar button:focus, .ql-snow.ql-toolbar button:hover, .ql-snow .ql-toolbar button:hover {
	color: <?= $themeColor; ?>
}
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-fill, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-label.ql-selected .ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-selected .ql-fill, .ql-snow.ql-toolbar .ql-picker-label.ql-selected .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-selected .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-fill, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-fill, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill, .ql-snow.ql-toolbar button.ql-active .ql-fill, .ql-snow .ql-toolbar button.ql-active .ql-fill, .ql-snow.ql-toolbar button.ql-active .ql-stroke.ql-fill, .ql-snow .ql-toolbar button.ql-active .ql-stroke.ql-fill, .ql-snow.ql-toolbar button:focus .ql-fill, .ql-snow .ql-toolbar button:focus .ql-fill, .ql-snow.ql-toolbar button:focus .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:focus .ql-stroke.ql-fill, .ql-snow.ql-toolbar button:hover .ql-fill, .ql-snow .ql-toolbar button:hover .ql-fill, .ql-snow.ql-toolbar button:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:hover .ql-stroke.ql-fill {
	fill: <?= $themeColor; ?>
}
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter, .ql-snow.ql-toolbar .ql-picker-label.ql-selected .ql-stroke, .ql-snow .ql-toolbar .ql-picker-label.ql-selected .ql-stroke, .ql-snow.ql-toolbar .ql-picker-label.ql-selected .ql-stroke-miter, .ql-snow .ql-toolbar .ql-picker-label.ql-selected .ql-stroke-miter, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke-miter, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke-miter, .ql-snow.ql-toolbar button.ql-active .ql-stroke, .ql-snow .ql-toolbar button.ql-active .ql-stroke, .ql-snow.ql-toolbar button.ql-active .ql-stroke-miter, .ql-snow .ql-toolbar button.ql-active .ql-stroke-miter, .ql-snow.ql-toolbar button:focus .ql-stroke, .ql-snow .ql-toolbar button:focus .ql-stroke, .ql-snow.ql-toolbar button:focus .ql-stroke-miter, .ql-snow .ql-toolbar button:focus .ql-stroke-miter, .ql-snow.ql-toolbar button:hover .ql-stroke, .ql-snow .ql-toolbar button:hover .ql-stroke, .ql-snow.ql-toolbar button:hover .ql-stroke-miter, .ql-snow .ql-toolbar button:hover .ql-stroke-miter {
	stroke: <?= $themeColor; ?>
}
.ql-snow .ql-editor pre.ql-syntax {
	color: #191927;
	background-color: #f6f7f9
}
.ql-snow .ql-tooltip {
	z-index: 1070
}
.ql-snow .ql-stroke, .ql-snow .ql-stroke-miter {
	stroke: #363642
}
.ql-snow .ql-fill, .ql-snow .ql-stroke.ql-fill {
	fill: #363642
}
.ql-snow .ql-color-picker .ql-picker-label, .ql-snow .ql-icon-picker .ql-picker-label {
	padding: 0 4px
}
.ql-snow .ql-picker {
	color: #363642
}
.ql-snow .ql-picker-options {
	background-color: hsla(0,0%,100%,.98)
}
.ql-snow .ql-picker.ql-expanded .ql-picker-label {
	color: #888c9b
}
.ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-fill {
	fill: #888c9b
}
.ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-stroke {
	stroke: #888c9b
}
.ql-snow .ql-picker.ql-font .ql-picker-item[data-value=serif]:before {
	font-family: -apple-system, BlinkMacSystemFont, Fira Sans, Helvetica Neue, Apple Color Emoji, sans-serif
}
.ql-snow .ql-picker.ql-font .ql-picker-item[data-value=monospace]:before {
	font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
}
.ql-snow .ql-color-picker.ql-background .ql-picker-item {
	background-color: #fff
}
.ql-snow .ql-color-picker.ql-color .ql-picker-item {
	background-color: #14141f
}

@media (pointer:coarse) {
.ql-snow.ql-toolbar button:hover:not(.ql-active), .ql-snow .ql-toolbar button:hover:not(.ql-active) {
	color: #363642
}
.ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-fill, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-fill, .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke, .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter, .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill {
	fill: #363642
}
}
.ql-toolbar.ql-snow {
	border: 1px solid rgba(34,34,48,.1);
	font-family: -apple-system, BlinkMacSystemFont, Fira Sans, Helvetica Neue, Apple Color Emoji, sans-serif
}
.ql-toolbar.ql-snow .ql-picker-options {
	border: 1px solid transparent;
	box-shadow: 0 2px 8px rgba(20,20,31,.2)
}
.ql-toolbar.ql-snow .ql-picker.ql-expanded .ql-picker-label, .ql-toolbar.ql-snow .ql-picker.ql-expanded .ql-picker-options {
	border-color: rgba(34,34,48,.1)
}
.ql-toolbar.ql-snow .ql-color-picker .ql-picker-item.ql-selected, .ql-toolbar.ql-snow .ql-color-picker .ql-picker-item:hover {
	border-color: #14141f
}
.ql-snow .ql-tooltip {
	color: #363642;
	background-color: hsla(0,0%,100%,.98);
	border-color: rgba(20,20,31,.15);
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16)
}
.ql-snow .ql-tooltip input[type=text] {
	color: #363642;
	background-color: #fff;
	border: 1px solid #c6c9d5;
	outline: 0
}
.ql-snow .ql-tooltip a.ql-action:after {
	border-right: 1px solid rgba(34,34,48,.1)
}
.ql-snow a {
	color: <?= $themeColor; ?>
}
.ql-container.ql-snow {
	border: 1px solid rgba(34,34,48,.1)
}
.CodeMirror {
	box-shadow: inset 0 1px 0 0 rgba(34,34,48,.05);
	transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
}
.CodeMirror pre {
	padding: 0
}
.CodeMirror .CodeMirror-code .cm-link, .CodeMirror .CodeMirror-code .cm-url {
	color: #888c9b
}
.CodeMirror .CodeMirror-code .cm-tag {
	color: #097b0a
}
.cm-header, .cm-strong {
	font-weight: 500
}
.CodeMirror-cursor {
	border-left-color: #363642
}
.editor-toolbar, .editor-toolbar:hover, .editor-wrapper input.title:focus, .editor-wrapper input.title:hover {
	opacity: 1
}
.editor-toolbar.disabled-for-preview a:not(.no-disable) {
	background: transparent;
	opacity: .38
}
.editor-toolbar a {
	color: #363642!important
}
.editor-toolbar a:hover {
	color: <?= $themeColor; ?>!important;
	background-color: transparent;
	border-color: transparent
}
.editor-toolbar a.active {
	color: #2e609c!important;
	background-color: rgba(52,108,176,.2);
	border-color: transparent
}
.editor-toolbar i.separator {
	border-right-color: rgba(34,34,48,.1);
	border-left-color: #c6c9d5
}
.editor-toolbar.fullscreen {
	background: #fff
}
.editor-toolbar.fullscreen:before {
	background: linear-gradient(90deg, #fff 0, hsla(0,0%,100%,0))
}
.editor-toolbar.fullscreen:after {
	background: linear-gradient(90deg, hsla(0,0%,100%,0) 0, #fff)
}
.CodeMirror, .editor-toolbar {
	color: #363642;
	background-color: #fff;
	border-color: #c6c9d5
}
.card>.CodeMirror, .card>.editor-toolbar {
	border: 0;
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.card>.editor-toolbar {
	border-bottom: 1px solid rgba(34,34,48,.1)
}
.form-group>.CodeMirror {
	border-radius: .25rem
}
.form-group>.CodeMirror-focused {
	border-color: <?= $themeColor; ?>;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.form-group .CodeMirror-scroll, .form-group>.CodeMirror {
	min-height: 4.5rem
}
.CodeMirror-fullscreen, .editor-preview-side, .editor-toolbar.fullscreen {
	z-index: 1050
}
.CodeMirror-lines {
	padding: 0
}
.editor-preview, .editor-preview-side {
	background-color: #fff
}
.editor-preview-side pre, .editor-preview pre {
	background: inherit
}
.editor-preview-side {
	border-top: 0;
	border-color: rgba(34,34,48,.1)
}
.editor-statusbar {
	color: #888c9b
}
.CodeMirror-line::-moz-selection, .CodeMirror-line>span::-moz-selection, .CodeMirror-line>span>span::-moz-selection {
background:rgba(20,20,31,.1)
}
.CodeMirror-focused .CodeMirror-selected, .CodeMirror-line::selection, .CodeMirror-line>span::selection, .CodeMirror-line>span>span::selection {
	background: rgba(20,20,31,.1)
}
.ace_editor {
	min-height: 200px;
	width: 100%;
	font-size: 90%;
	line-height: 1.25rem!important
}
.card>.ace_editor {
	margin-bottom: 0;
	border-radius: 0
}
.ace_statusbar {
	padding: .5em;
	font-size: .75rem;
	color: #888c9b
}
.ace_statusbar:after {
	display: block;
	clear: both;
	content: ""
}
.ace_statusbar-dark {
	background-color: #222230;
	color: #f6f7f9
}
.ace_statusbar-dark .ace_status-indicator {
	border-color: #363642
}
.ace_status-indicator {
	margin-left: auto;
	padding: 0 .5em;
	align-self: center;
	float: right;
	font-size: .75rem;
	line-height: 1;
	border-left: 1px solid rgba(34,34,48,.1)
}
#toast-container {
	display: flex;
	flex-direction: column;
	align-items: center;
	padding: 0 1rem;
	right: 0;
	left: 0;
	font-size: .875rem
}
#toast-container.toast-top-full-width>div:first-child {
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
#toast-container.toast-bottom-full-width>div:last-child {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0
}
#toast-container.toast-top-center, #toast-container.toast-top-left, #toast-container.toast-top-right {
	top: 4.5rem
}
#toast-container.toast-top-full-width {
	top: 3.5rem
}
#toast-container.toast-bottom-center, #toast-container.toast-bottom-left, #toast-container.toast-bottom-right {
	bottom: 1rem
}
#toast-container.toast-bottom-full-width {
	bottom: 0
}
#toast-container.toast-bottom-left, #toast-container.toast-top-left {
	align-items: flex-start
}
#toast-container.toast-bottom-right, #toast-container.toast-top-right {
	align-items: flex-end
}
#toast-container>div {
	display: flex;
	padding: 1rem 3.25rem 1rem 1rem;
	margin: 0!important;
	width: auto!important;
	min-width: 288px;
	max-width: 568px;
	opacity: 1
}
#toast-container>div, #toast-container>div:hover {
	box-shadow: 0 2px 5px 0 rgba(20,20,31,.2)
}
#toast-container>div+div {
	margin-top: .5rem!important
}
#toast-container>.toast-error, #toast-container>.toast-info, #toast-container>.toast-success, #toast-container>.toast-warning {
	background-image: none!important
}
.toast-close-button {
	position: absolute;
	top: 1rem;
	right: 1rem;
	margin-left: .5em;
	color: inherit;
	float: none;
	opacity: .4
}
.toast-close-button:focus, .toast-close-button:hover {
	color: #fff;
	opacity: .65
}
#toast-container>.toast-success, .toast-success {
	background-color: #097b0a;
	color: #fff
}
#toast-container>.toast-error, .toast-error {
	background-color: #ff0538;
	color: #fff
}
#toast-container>.toast-info, .toast-info {
	background-color: #222230;
	color: #fff
}
#toast-container>.toast-warning, .toast-warning {
	background-color: #ec935e;
	color: #363642
}
.toast-progress {
	opacity: .15
}

@media (max-width:575.98px) {
#toast-container {
	padding: 0
}
#toast-container.toast-bottom-center, #toast-container.toast-bottom-left, #toast-container.toast-bottom-right, #toast-container.toast-top-center, #toast-container.toast-top-left, #toast-container.toast-top-right {
	left: 0;
	right: 0
}
#toast-container.toast-bottom-center>div, #toast-container.toast-bottom-full-width>div, #toast-container.toast-bottom-left>div, #toast-container.toast-bottom-right>div, #toast-container.toast-top-center>div, #toast-container.toast-top-full-width>div, #toast-container.toast-top-left>div, #toast-container.toast-top-right>div {
	width: 100%!important;
	max-width: 100%
}
#toast-container.toast-top-center, #toast-container.toast-top-full-width, #toast-container.toast-top-left, #toast-container.toast-top-right {
	top: calc(3.5rem - 1px)
}
#toast-container.toast-bottom-center, #toast-container.toast-bottom-left, #toast-container.toast-bottom-right {
	bottom: 0
}
#toast-container>div {
	padding: 1rem 3.25rem 1rem 1rem
}
#toast-container>div.rtl {
	padding: 1rem 1rem 1rem 3.25rem
}
#toast-container>div {
	border-radius: 0;
	margin-bottom: 0
}
#toast-container .toast-close-button {
	top: 1rem;
	right: 1rem
}
#toast-container .rtl .toast-close-button {
	right: auto;
	left: 1rem
}
}
.toast-top-center>div, .toast-top-full-width>div {
	-webkit-animation: toastTop .3s;
	animation: toastTop .3s
}
.toast-top-right>div {
	-webkit-animation: toastRight .3s;
	animation: toastRight .3s
}
.toast-top-left>div {
	-webkit-animation: toastLeft .3s;
	animation: toastLeft .3s
}

@media (max-width:575.98px) {
.toast-top-left>div, .toast-top-right>div {
	-webkit-animation: toastTop .3s;
	animation: toastTop .3s
}
}
.toast-bottom-center>div, .toast-bottom-full-width>div, .toast-bottom-left>div, .toast-bottom-right>div {
	-webkit-animation: toastBottom .3s;
	animation: toastBottom .3s
}
@-webkit-keyframes toastBottom {
0% {
transform:translate3d(0, 100%, 0)
}
to {
transform:translateZ(0)
}
}
@keyframes toastBottom {
0% {
transform:translate3d(0, 100%, 0)
}
to {
transform:translateZ(0)
}
}
@-webkit-keyframes toastTop {
0% {
transform:translate3d(0, -100%, 0)
}
to {
transform:translateZ(0)
}
}
@keyframes toastTop {
0% {
transform:translate3d(0, -100%, 0)
}
to {
transform:translateZ(0)
}
}
@-webkit-keyframes toastRight {
0% {
transform:translate3d(100%, 0, 0)
}
to {
transform:translateZ(0)
}
}
@keyframes toastRight {
0% {
transform:translate3d(100%, 0, 0)
}
to {
transform:translateZ(0)
}
}
@-webkit-keyframes toastLeft {
0% {
transform:translate3d(-100%, 0, 0)
}
to {
transform:translateZ(0)
}
}
@keyframes toastLeft {
0% {
transform:translate3d(-100%, 0, 0)
}
to {
transform:translateZ(0)
}
}
.chartjs {
	height: 250px
}
.chartjs-custom-tooltip {
	opacity: 1;
	position: fixed;
	background: #14141f;
	color: #fff;
	border-radius: 3px;
	transition: all .1s ease;
	pointer-events: none;
	transform: translate(-50%);
	z-index: 1070
}
.chartjs-custom-tooltip .chartjs-tooltip-key {
	display: inline-block;
	width: 10px;
	height: 10px;
	margin-right: 10px
}
.flot {
	min-height: 200px
}
.flot .legend>div {
	background-color: #f6f7f9!important
}
.flot .legendColorBox {
	margin-bottom: 4px
}
.flot .legendLabel {
	padding-left: 6px;
	padding-right: 8px
}
.flot .flot-tick-label, .flot .legendLabel {
	color: #888c9b
}
.flot-tooltip {
	position: absolute;
	display: none;
	padding: 3px 8px;
	font-size: 12px;
	color: #fff;
	background-color: #14141f;
	border: 1px solid #14141f;
	border-radius: .25rem;
	opacity: .9;
	z-index: 1070
}
.easypiechart {
	position: relative;
	text-align: center;
	font-size: 1.25rem
}
.easypiechart>span {
	position: absolute;
	display: inline-block;
	margin-top: -.125em;
	padding: 0;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%)
}
.chart-inline-group {
	position: relative;
	min-height: 131px
}
.chart-inline-group .easypiechart {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%)
}
.sparkline {
	vertical-align: middle
}
.jqstooltip {
	padding: 10px;
	color: #fff!important;
	background-color: #14141f!important;
	border-radius: .25rem!important;
	box-sizing: content-box;
	z-index: 1070
}
.jqsfield {
	color: inherit!important
}
.vmap {
	width: 100%;
	height: 100%
}
.jqvmap-zoomin, .jqvmap-zoomout {
	width: auto;
	height: auto;
	padding: .5rem;
	color: <?= $themeColor; ?>;
	background-color: #dee9f5
}
.jqvmap-zoomin:focus, .jqvmap-zoomin:hover, .jqvmap-zoomout:focus, .jqvmap-zoomout:hover {
	background-color: #b3cbe9;
	z-index: 1
}
.map-pin {
	width: 64px;
	height: 42px;
	top: -25px;
	left: -32px;
	background-size: 16px 16px;
	background-repeat: no-repeat;
	background-position: top;
	color: #888c9b
}
.map-pin, .map-pin span {
	position: absolute;
	text-align: center
}
.map-pin span {
	bottom: 0;
	width: 100%;
	left: 0
}
.jqvmap-zoomin {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0
}
.jqvmap-zoomout {
	top: 2.25rem;
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.gantt-container {
	background-color: #fff;
	border-radius: .25rem;
	overflow: auto;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.gantt .grid-header {
	fill: #fff!important;
	stroke: transparent!important
}
.gantt .grid-row {
	fill: #fff!important
}
.gantt .grid-row:nth-child(2n) {
	fill: rgba(20,20,31,.05)!important
}
.gantt .row-line, .gantt .tick {
	stroke: rgba(34,34,48,.1)!important
}
.gantt .today-highlight {
	fill: rgba(52,108,176,.08)!important;
	opacity: 1!important
}
.gantt #arrow {
	stroke: #888c9b!important
}
.gantt .bar {
	fill: #c6c9d5!important;
	stroke: #a6abbd!important
}
.gantt .bar-progress {
	fill: #097b0a!important
}
.gantt .bar-invalid {
	stroke: #888c9b!important
}
.gantt .bar-invalid~.bar-label, .gantt .bar-label {
	fill: #fff!important
}
.gantt .bar-label.big {
	fill: #363642!important
}
.gantt .handle {
	fill: #d6d8e1!important
}
.gantt .upper-text {
	fill: #363642!important
}
.gantt .lower-text {
	fill: #888c9b!important
}
.gantt #details .details-container {
	background: #14141f!important;
	color: #fff!important
}
.gantt #details .details-container h5 {
	color: #fff!important
}
.gantt #details .details-container p {
	color: #888c9b!important
}
.fc-theme-bootstrap .table-bordered {
	border: 0
}
.fc-theme-bootstrap .table-bordered td:first-child, .fc-theme-bootstrap .table-bordered th:first-child {
	border-left-width: 0
}
.fc-theme-bootstrap .table-bordered td:last-child, .fc-theme-bootstrap .table-bordered th:last-child {
	border-right-width: 0
}
.fc-theme-bootstrap .table-bordered>thead td, .fc-theme-bootstrap .table-bordered>thead th {
	border-top-width: 0
}
.fc-theme-bootstrap .table-bordered>tbody tr:last-child td, .fc-theme-bootstrap .table-bordered>tbody tr:last-child th {
	border-bottom-width: 0
}
.fc-theme-bootstrap .fc-toolbar.fc-header-toolbar {
	margin-bottom: 0;
	padding: 1rem;
	display: flex;
	align-items: center;
	border-bottom: 1px solid rgba(20,20,31,.12)
}

@media (max-width:575.98px) {
.fc-theme-bootstrap .fc-toolbar.fc-header-toolbar {
	flex-direction: column
}
}
.fc-theme-bootstrap .fc-toolbar.fc-header-toolbar .fc-toolbar-title {
	margin: 0;
	font-size: 1.25rem
}

@media (max-width:575.98px) {
.fc-theme-bootstrap .fc-toolbar.fc-header-toolbar .fc-toolbar-title {
	margin-bottom: 1rem
}
}
.fc-theme-bootstrap .fc-list-day-cushion.table-active {
	background-color: #f6f7f9;
	color: #363642
}
.fc-theme-bootstrap .fc-event {
	padding: .125rem .25rem!important;
	border-width: 0 0 0 3px!important;
	border-radius: 0
}
.fc-theme-bootstrap .fc-popover-header {
	padding: .5rem .75rem
}
.fc-theme-bootstrap .fc-list-event:hover td {
	background-color: rgba(34,34,48,.05)
}
.fc-theme-bootstrap .fc .fc-list-empty-cushion {
	margin: 0
}
.board .fc .fc-scrollgrid>thead>.fc-scrollgrid-section-sticky>* {
	top: -1.5rem
}
.page-sidebar .fc-list-empty {
	padding-top: 1rem;
	background-color: transparent;
	color: #888c9b
}
canvas.particles-js-canvas-el {
	position: absolute;
	top: 0;
	left: 0
}
#session-timeout-dialog .modal-header>.close {
	display: none
}
.parsley-errors-list {
	margin: .25rem 0;
	padding: 0;
	display: none;
	width: 100%;
	font-size: 80%;
	color: #ff0538
}
.parsley-errors-list.filled, .parsley-errors-list>li {
	display: block
}
.headroom {
	will-change: transform;
	transition: transform .2s linear
}
.headroom--pinned {
	transform: translateY(0)
}
.headroom--unpinned {
	transform: translateY(-100%)
}
.headroom--pinned, .position-relative.headroom--not-top.headroom--unpinned {
	position: fixed!important
}
.position-relative.headroom--top {
	position: relative!important
}
:focus {
	outline-color: <?= $themeColor; ?>
}
::-moz-selection {
background:#f7c46c;
color:#363642;
text-shadow:none
}
::selection {
	background: #f7c46c;
	color: #363642;
	text-shadow: none
}
body, html {
	height: 100%;
	margin: 0;
	padding: 0;
	border: 0
}
html.loading {
	display: none
}

@media (min-width:768px) {
body {
	font-size: .875rem
}
}
iframe {
	margin-bottom: 1rem
}
.app {
	width: 100%;
	min-height: 100%;
	background-color: #f6f7f9;
	overflow-x: hidden
}
.app-site {
	background-color: #fff
}
.app-site .app-header {
	height: auto
}

@media (min-width:768px) {
.app.has-clipped-header .app-header {
	left: 15rem
}
}
.app.has-clipped-header .top-bar-brand {
	width: auto;
	background-color: transparent
}
.app.has-clipped-header .app-aside {
	top: 0
}
.app-main {
	position: relative;
	padding-top: 3.5rem;
	padding-right: 0;
	padding-left: 0;
	overflow: hidden;
	background:linear-gradient(0deg, <?=$rgba;?>, <?=$rgba;?>), url('<?= $themeFolder; ?>/images/bg.jpg');
	background-size: cover;
}
.wrapper {
	position: relative;
	margin: 0 auto
}
@-webkit-keyframes fadeInBackdrop {
0% {
opacity:0
}
to {
opacity:1
}
}
@keyframes fadeInBackdrop {
0% {
opacity:0
}
to {
opacity:1
}
}
.el-example>.btn, .el-example>.btn-group {
	margin: 4px 2px
}
.app-header {
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	height: 3.5rem;
	z-index: 1030;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.app-header .navbar {
	padding-top: .625rem;
	padding-bottom: .625rem
}
.app-header .btn-account {
	padding: 0 1rem;
	min-width: 3.5rem;
	min-height: 3.5rem
}
.app-header .btn-account .account-summary {
	max-width: 10rem
}

@media (min-width:992px) {
body.ie .app-header .btn-account {
	min-width: 14rem
}
}
.top-bar {
	display: flex;
	width: 100%;
	height: 3.5rem;
	align-items: stretch
}
.top-bar-brand {
	margin-bottom: 0;
	padding: 0 .5rem 0 1rem;
	display: none;
	height: 3.5rem;
	width: 15rem;
	font-size: 1.25rem;
	align-items: center
}
.top-bar-brand>a:focus, .top-bar-brand>a:hover {
	text-decoration: none
}

@media (min-width:768px) {
.top-bar-brand {
	display: flex
}
}
.top-bar-list {
	flex: 1
}
.top-bar-item, .top-bar-list {
	display: flex;
	align-items: center
}
.top-bar-item {
	padding: 0
}

@media (min-width:768px) {
.top-bar-item {
	padding-right: 1rem;
	padding-left: 1rem
}
}

@media (min-width:992px) {
.top-bar-item {
	padding-left: 2rem
}
}
.top-bar-item-full {
	flex: 1
}
.top-bar-item-right {
	margin-left: auto
}
.top-bar-search {
	width: 100%
}

@media (max-width:767.98px) {
.top-bar-search {
	padding-right: 1rem;
	padding-left: .5rem
}
}
.top-bar-search .input-group-search, .top-bar-search .input-group-search.focus {
	box-shadow: none
}
.top-bar-search .input-group {
	width: 100%
}
.header-nav {
	padding: 0 .5rem
}
.header-nav .nav-link {
	margin: 0 .25rem;
	padding-right: .75rem;
	padding-left: .75rem;
	height: calc(2.25rem + 2px);
	border: 1px solid transparent;
	border-radius: .25rem
}

@media (min-width:768px) {
.header-nav .nav-link {
	height: 2.25rem
}
}
.header-nav-dropdown {
	position: static
}

@media (min-width:576px) {
.header-nav-dropdown {
	position: relative
}
}

@media (max-width:575.98px) {
.header-nav-dropdown .dropdown-arrow {
	top: auto;
	left: auto;
	margin-left: .75rem
}
}
.header-nav-dropdown .dropdown-menu {
	border-top-left-radius: 0;
	border-top-right-radius: 0
}

@media (max-width:575.98px) {
.header-nav-dropdown .dropdown-menu {
	margin-top: 0;
	left: 0!important;
	right: 0!important;
	width: 100%;
	border-radius: 0
}
}
.app-header-light {
	background-color: #f6f7f9;
	color: rgba(20,20,31,.4)
}
.app-header-light .btn-account {
	color: #363642;
	border-left: 1px solid rgba(34,34,48,.1)
}
.app-header-light .btn-account:hover {
	color: #363642;
	background-color: rgba(20,20,31,.025)
}
.app-header-light .btn-account.focus, .app-header-light .btn-account.show, .app-header-light .btn-account:active, .app-header-light .btn-account:focus {
	color: #363642;
	background-color: rgba(20,20,31,.075)
}
.app-header-light .top-bar-brand>a, .app-header-light .top-bar-brand>a:focus, .app-header-light .top-bar-brand>a:hover {
	color: <?= $themeColor; ?>
}

@media (min-width:768px) {
.app-header-light .top-bar-search {
	margin-left: -1rem
}
}
.app-header-light .top-bar-search .input-group-search {
	border: transparent
}
.app-header-light .header-nav .nav-link {
	color: rgba(20,20,31,.4)
}
.app-header-light .header-nav .nav-link:focus, .app-header-light .header-nav .nav-link:hover {
	color: #363642
}
.app-header-light .header-nav .nav-link.disabled {
	color: #a6abbd
}
.app-header-light .header-nav .active>.nav-link, .app-header-light .header-nav .nav-link.active, .app-header-light .header-nav .nav-link.show, .app-header-light .header-nav .show>.nav-link {
	color: <?= $themeColor; ?>
}
.app-header-light .hamburger .hamburger-inner, .app-header-light .hamburger .hamburger-inner:after, .app-header-light .hamburger .hamburger-inner:before {
	background-color: #363642
}
.app-header-dark {
	background-color: <?= $themeColor; ?>;
	color: hsla(0,0%,100%,.8)
}
.app-header-dark .btn-account {
	color: #fff;
	border-left: 1px solid rgba(34,34,48,.12)
}
.app-header-dark .btn-account:hover {
	background-color: hsla(0,0%,100%,.12)
}
.app-header-dark .btn-account.focus, .app-header-dark .btn-account.show, .app-header-dark .btn-account:active, .app-header-dark .btn-account:focus, .app-header-dark .top-bar-brand {
	background-color: rgba(20,20,31,.12)
}
.app-header-dark .top-bar-brand>a, .app-header-dark .top-bar-brand>a:focus, .app-header-dark .top-bar-brand>a:hover {
	color: #fff
}
.app-header-dark .top-bar-search .input-group {
	border-color: transparent
}
.app-header-dark .top-bar-search .input-group-search {
	background-color: hsla(0,0%,100%,.12)
}
.app-header-dark .top-bar-search .input-group-search.focus {
	background-color: #fff
}
.app-header-dark .top-bar-search .input-group-search:not(.focus) .form-control::-webkit-input-placeholder {
color:hsla(0,0%,100%,.6)
}
.app-header-dark .top-bar-search .input-group-search:not(.focus) .form-control::-moz-placeholder {
color:hsla(0,0%,100%,.6)
}
.app-header-dark .top-bar-search .input-group-search:not(.focus) .form-control:-ms-input-placeholder {
color:hsla(0,0%,100%,.6)
}
.app-header-dark .top-bar-search .input-group-search:not(.focus) .form-control::-ms-input-placeholder {
color:hsla(0,0%,100%,.6)
}
.app-header-dark .top-bar-search .input-group-search:not(.focus) .form-control, .app-header-dark .top-bar-search .input-group-search:not(.focus) .form-control::placeholder, .app-header-dark .top-bar-search .input-group-search:not(.focus) .input-group-text {
color:hsla(0,0%,100%,.6)
}
.app-header-dark .header-nav .nav-link {
	color: hsla(0,0%,100%,.8)
}
.app-header-dark .header-nav .nav-link:focus, .app-header-dark .header-nav .nav-link:hover {
	color: #fff;
	background-color: hsla(0,0%,100%,.12)
}
.app-header-dark .header-nav .nav-link.disabled {
	color: hsla(0,0%,100%,.6)
}
.app-header-dark .header-nav .active>.nav-link, .app-header-dark .header-nav .nav-link.active, .app-header-dark .header-nav .nav-link.show, .app-header-dark .header-nav .show>.nav-link {
	color: #fff;
	background-color: rgba(20,20,31,.12)
}
.app-aside {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	padding: 0;
	width: calc(100vw - 3.5rem);
	max-width: 16.5rem;
	z-index: 1050;
	transform: translate3d(-100%, 0, 0);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: transform .2s ease-in-out;
	background-image: url("<?= $themeFolder; ?>/images/sunny.jpg");
	background-size: cover;
}
.app-aside.show .aside-header>.hamburger {
	display: block
}
.app-aside.show {
	transform: translateZ(0)
}
.app-aside+.app-main {
	padding-left: 0
}
.app-aside .top-bar-brand {
	width: auto
}
.aside-backdrop {
	display: none;
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: rgba(20,20,31,.8);
	z-index: 1040
}
.aside-backdrop.show {
	display: block;
	-webkit-animation: fadeInBackdrop .26s ease forwards;
	animation: fadeInBackdrop .26s ease forwards
}
.aside-content {
	display: flex;
	flex-direction: column;
	height: 100%
}
.aside-header {
	position: relative;
	display: block;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	z-index: 3
}
.aside-header>.hamburger {
	display: none;
	position: absolute;
	top: .75rem;
	right: -3rem
}
.aside-header .btn-account {
	padding: 1rem;
	width: 100%;
	justify-content: flex-start
}
.aside-header .btn-account.focus, .aside-header .btn-account:focus {
	background-color: inherit
}
.aside-header .btn-account:active {
	color: #363642;
	background-color: rgba(52,108,176,.08)
}
.aside-header .btn-account[aria-expanded=true]:before {
	content: "";
	height: 1px;
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 2
}
.aside-header .btn-account .account-name {
	font-size: 1.125rem;
	line-height: 1.5rem
}
.aside-header .btn-account .account-description {
	font-size: .875em
}
.dropdown-aside {
	position: absolute;
	width: 100%;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	z-index: 1
}
.dropdown-aside.show {
	max-height: calc(100vh - 4.5rem);
	overflow: auto
}
.dropdown-aside .dropdown-icon {
	text-align: center;
	width: 1.5rem;
	margin-right: .5em
}
.aside-menu {
	position: relative;
	flex: 1;
	overflow-y: auto
}
.app-aside-expand-sm {
	top: auto;
	transform: translateZ(0);
	z-index: 1030
}

@media (max-width:575.98px) {
.app-aside-expand-sm {
	top: 0;
	transform: translate3d(-100%, 0, 0);
	z-index: 1050;
	border-right: 0
}
.app-aside-expand-sm.show {
	transform: translateZ(0)
}
}

@media (min-width:576px) {
.app-aside-expand-sm {
	top: 3.5rem;
	width: 15rem;
	z-index: 6
}
}

@media (min-width:576px) {
.app-aside-expand-sm+.app-main {
	padding-left: 15rem
}
}

@media (max-width:575.98px) {
.app-aside-expand-sm~.aside-backdrop {
	display: none
}
.app-aside-expand-sm~.aside-backdrop.show {
	display: block;
	-webkit-animation: fadeInBackdrop .26s ease forwards;
	animation: fadeInBackdrop .26s ease forwards
}
}

@media (min-width:576px) {
.app-aside-expand-sm~.aside-backdrop.show {
	display: none
}
}
.app-aside-expand-md {
	top: auto;
	transform: translateZ(0);
	z-index: 1030
}

@media (max-width:767.98px) {
.app-aside-expand-md {
	top: 0;
	transform: translate3d(-100%, 0, 0);
	z-index: 1050;
	border-right: 0
}
.app-aside-expand-md.show {
	transform: translateZ(0)
}
}

@media (min-width:768px) {
.app-aside-expand-md {
	top: 3.5rem;
	width: 15rem;
	z-index: 6
}
}

@media (min-width:768px) {
.app-aside-expand-md+.app-main {
	padding-left: 15rem
}
}

@media (max-width:767.98px) {
.app-aside-expand-md~.aside-backdrop {
	display: none
}
.app-aside-expand-md~.aside-backdrop.show {
	display: block;
	-webkit-animation: fadeInBackdrop .26s ease forwards;
	animation: fadeInBackdrop .26s ease forwards
}
}

@media (min-width:768px) {
.app-aside-expand-md~.aside-backdrop.show {
	display: none
}
}
.app-aside-expand-lg {
	top: auto;
	transform: translateZ(0);
	z-index: 1030
}

@media (max-width:991.98px) {
.app-aside-expand-lg {
	top: 0;
	transform: translate3d(-100%, 0, 0);
	z-index: 1050;
	border-right: 0
}
.app-aside-expand-lg.show {
	transform: translateZ(0)
}
}

@media (min-width:992px) {
.app-aside-expand-lg {
	top: 3.5rem;
	width: 15rem;
	z-index: 6
}
}

@media (min-width:992px) {
.app-aside-expand-lg+.app-main {
	padding-left: 15rem
}
}

@media (max-width:991.98px) {
.app-aside-expand-lg~.aside-backdrop {
	display: none
}
.app-aside-expand-lg~.aside-backdrop.show {
	display: block;
	-webkit-animation: fadeInBackdrop .26s ease forwards;
	animation: fadeInBackdrop .26s ease forwards
}
}

@media (min-width:992px) {
.app-aside-expand-lg~.aside-backdrop.show {
	display: none
}
}
.app-aside-expand-xl {
	top: auto;
	transform: translateZ(0);
	z-index: 1030
}

@media (max-width:1199.98px) {
.app-aside-expand-xl {
	top: 0;
	transform: translate3d(-100%, 0, 0);
	z-index: 1050;
	border-right: 0
}
.app-aside-expand-xl.show {
	transform: translateZ(0)
}
}

@media (min-width:1200px) {
.app-aside-expand-xl {
	top: 3.5rem;
	width: 15rem;
	z-index: 6
}
}

@media (min-width:1200px) {
.app-aside-expand-xl+.app-main {
	padding-left: 15rem
}
}

@media (max-width:1199.98px) {
.app-aside-expand-xl~.aside-backdrop {
	display: none
}
.app-aside-expand-xl~.aside-backdrop.show {
	display: block;
	-webkit-animation: fadeInBackdrop .26s ease forwards;
	animation: fadeInBackdrop .26s ease forwards
}
}

@media (min-width:1200px) {
.app-aside-expand-xl~.aside-backdrop.show {
	display: none
}
}
.app-aside-expand {
	top: auto;
	transform: translateZ(0);
	z-index: 1030;
	top: 0;
	transform: translate3d(-100%, 0, 0);
	z-index: 1050;
	border-right: 0;
	top: 3.5rem;
	width: 15rem;
	z-index: 6
}
.app-aside-expand.show {
	transform: translateZ(0)
}
.app-aside-expand+.app-main {
	padding-left: 15rem
}
.app-aside-expand~.aside-backdrop {
	display: none
}
.app-aside-expand~.aside-backdrop.show {
	display: block;
	-webkit-animation: fadeInBackdrop .26s ease forwards;
	animation: fadeInBackdrop .26s ease forwards;
	display: none
}
.app-aside-light {
	color: inherit;
	background-color: #f6f7f9
}

@media (min-width:768px) {
.app-aside-light {
	border-right: 1px solid rgba(20,20,31,.05)
}
}
.app-aside-light .aside-header, .app-aside-light .aside-header .btn-account[aria-expanded=true]:before, .app-aside-light .dropdown-aside {
	background-color: #fff
}
.app-aside-dark {
	color: inherit;
	background-color: #222230
}

@media (min-width:768px) {
.app-aside-dark {
	border-right: 1px solid hsla(0,0%,100%,.05)
}
}
.app-aside-dark .aside-header {
	color: #f6f7f9;
	background-color: #363642
}
.app-aside-dark .aside-header .btn-account[aria-expanded=true]:before, .app-aside-dark .dropdown-aside {
	background-color: #363642
}
.app-aside-dark .dropdown-aside .dropdown-item {
	color: #f6f7f9
}
.app-aside-dark .dropdown-aside .dropdown-divider {
	border-top-color: hsla(0,0%,100%,.05)
}
.app-aside-dark .stacked-menu>.menu>.menu-item.has-active>.menu-link {
	background-color: hsla(0,0%,100%,.025)
}
.app-aside-dark .stacked-menu>.menu>.menu-item>.menu-link {
	color: hsla(0,0%,100%,.6)
}
.app-aside-dark .stacked-menu>.menu>.menu-item>.menu-link:focus, .app-aside-dark .stacked-menu>.menu>.menu-item>.menu-link:hover {
	color: hsla(0,0%,100%,.8)
}
.app-aside-dark .stacked-menu .menu-link {
	color: hsla(0,0%,100%,.6)
}
.app-aside-dark .stacked-menu .menu-link>.menu-icon {
	color: hsla(0,0%,100%,.38)
}
.app-aside-dark .stacked-menu .menu-link:focus, .app-aside-dark .stacked-menu .menu-link:focus>.menu-icon, .app-aside-dark .stacked-menu .menu-link:hover, .app-aside-dark .stacked-menu .menu-link:hover>.menu-icon {
	color: hsla(0,0%,100%,.8)
}
.app-aside-dark .stacked-menu .menu-item.has-active.has-child>.menu-link, .app-aside-dark .stacked-menu .menu-item.has-active>.menu-link, .app-aside-dark .stacked-menu .menu-item.has-active>.menu-link .menu-icon, .app-aside-dark .stacked-menu .menu-item.has-open:not(.has-active)>.menu-link, .app-aside-dark .stacked-menu .menu-item.has-open:not(.has-active)>.menu-link .menu-icon {
	color: #fff
}
.app-aside-dark .stacked-menu-has-collapsible .has-child>.menu-link:after {
	background: url("data:image/svg+xml;charset=utf-8,%3Csvg aria-hidden='true' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 256 512'%3E%3Cpath fill='%23a6abbd' d='M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z'/%3E%3C/svg%3E") 50% no-repeat
}
.app.has-compact-menu .top-bar-brand {
	background: transparent
}
.app.has-compact-menu .app-aside {
	width: 4rem
}
.app.has-compact-menu .app-aside+.app-main {
	padding-left: 4rem
}
.app.has-compact-menu .aside-menu.overflow-hidden.ps {
	overflow: visible!important
}
.app.has-compact-menu .aside-menu .ps__rail-x, .app.has-compact-menu .aside-menu .ps__rail-y {
	display: none
}
.app.has-compact-menu .stacked-menu .menu-subhead {
	font-weight: 600;
	font-size: 80%;
	text-transform: uppercase;
	color: #363642
}

@media (min-width:768px) {
.app.has-compact-menu .stacked-menu .menu-link {
	padding-top: .325rem;
	padding-bottom: .325rem
}
}
.app.has-compact-menu .stacked-menu .has-child>.menu {
	background-color: hsla(0,0%,100%,.98);
	border-top-right-radius: .25rem;
	border-bottom-right-radius: .25rem
}
.app.has-compact-menu .stacked-menu .has-child>.menu .menu {
	border-radius: .25rem
}
.app.has-compact-menu .stacked-menu .has-child.has-open>.menu {
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16)
}
.app.has-compact-menu .stacked-menu.stacked-menu-has-collapsible .has-child .has-child.has-open>.menu {
	box-shadow: none
}
.app.has-compact-menu .d-compact-menu-none {
	display: none
}
.app.has-compact-menu .d-compact-menu-block {
	display: block
}
.app.has-compact-menu .d-compact-menu-flex {
	display: flex
}
.app.has-compact-menu .d-compact-menu-inline {
	display: inline
}
.app.has-compact-menu .d-compact-menu-inline-block {
	display: inline-block
}
.stacked-menu-has-compact>.menu>.menu-item:not(.has-child):hover>.menu-link {
	overflow: visible
}
.stacked-menu-has-compact>.menu>.menu-item:not(.has-child):hover>.menu-link .menu-text {
	width: auto;
	height: auto;
	padding: .325rem .5rem;
	color: #363642;
	background-color: hsla(0,0%,100%,.98);
	line-height: 1.625rem;
	visibility: visible;
	opacity: 1;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 2px 7px 1px rgba(20,20,31,.16);
	border-top-right-radius: .25rem;
	border-bottom-right-radius: .25rem
}
.stacked-menu-has-compact .has-child>.menu-link:before, .stacked-menu-has-hoverable .has-child>.menu-link:before {
	right: .5rem;
	border-width: 4px;
	border-left: 4px solid;
	transform: translateY(-4px);
	opacity: .64
}
.stacked-menu-has-collapsible.stacked-menu-has-compact .has-child>.menu-link:after {
	display: none
}
.page {
	min-height: 646px
}

@media (max-height:992px) {
.page {
	min-height: calc(100vh - 3.5rem)
}
}
.page-expanded {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	background-color: #f6f7f9;
	z-index: 1030
}
.page-expanded .page-inner-fill {
	height: 100vh
}
.page-navs {
	position: relative;
	display: flex;
	align-items: center;
	padding-right: 1rem;
	padding-left: 1rem;
	height: 3.5rem;
	background-color: #fff;
	box-shadow: 0 1px 0 rgba(34,34,48,.1);
	z-index: 5
}

@media (min-width:992px) {
.page-navs {
	padding-right: 2rem;
	padding-left: 2rem
}
}
.page-navs>.navbar {
	padding-right: 0;
	padding-left: 0
}
.page-navs>.nav, .page-navs>.nav-scroller {
	flex-grow: 1;
	align-self: flex-start
}
.page-navs>.nav-scroller .nav-tabs, .page-navs>.nav-tabs {
	border-bottom: 0
}
.page-cover {
	position: relative;
	padding: 2rem 1rem 1rem;
	display: flex;
	min-height: 16rem;
	flex-direction: column;
	background-color: #e6e8ed;
	background-size: cover;
	background-position: 50%;
	box-shadow: 0 1px 0 rgba(34,34,48,.1)
}

@media (min-width:576px) {
.page-cover {
	padding-right: 1rem;
	padding-left: 1rem
}
}

@media (min-width:992px) {
.page-cover {
	padding-right: 2rem;
	padding-left: 2rem
}
}
.page-cover .cover-controls {
	margin-bottom: 1.25rem;
	display: flex
}
.page-cover .cover-controls:last-child {
	margin-bottom: 0
}
.page-cover .cover-controls .btn {
	flex: 1
}
.page-cover .cover-controls .btn+.btn {
	margin-left: .5rem
}

@media (min-width:992px) {
.page-cover .cover-controls {
	margin-bottom: 0;
	display: block;
	position: absolute;
	top: 2rem;
	right: 1rem
}
.page-cover .cover-controls-bottom {
	top: auto;
	bottom: .5rem
}
.page-cover .cover-controls .btn+.btn {
	margin-left: 0
}
}
.cover-img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	-o-object-fit: cover;
	object-fit: cover;
	-o-object-position: center;
	object-position: center;
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.page-message {
	position: fixed;
	top: 3.5rem;
	left: 50%;
	padding: .5rem 1rem;
	display: inline-table;
	width: 100%;
	max-width: 100%;
	color: #363642;
	background-color: #f7c46c;
	text-align: center;
	z-index: 1030;
	box-shadow: 0 1rem 3rem rgba(20,20,31,.175);
	transform: translate3d(-50%, 0, 0);
	cursor: pointer
}

@media (min-width:768px) {
.page-message {
	top: 4.25rem;
	width: auto;
	max-width: 47rem;
	border-radius: 4rem
}
}
.page-message a:not(.btn) {
	text-decoration: underline
}
.page-inner {
	padding: 1.5rem 0
}

@media (min-width:576px) {
.page-inner {
	padding-right: 1rem;
	padding-left: 1rem
}
}

@media (min-width:992px) {
.page-inner {
	padding-right: 2rem;
	padding-left: 2rem
}
}
.page-inner-fill {
	display: flex;
	padding: 0;
	flex-direction: column;
	height: calc(100vh - 3.5rem)
}
.page-inner-fill>.page-section {
	overflow-y: auto
}
.page-inner>.page-cover {
	margin-top: -1.5rem
}

@media (min-width:576px) {
.page-inner>.page-cover {
	margin-top: 0;
	border-radius: .25rem
}
.page-inner>.page-cover .cover-img {
	border-radius: .25rem
}
}
.page-section, .page-title-bar {
	width: 100%;
	margin-right: auto;
	margin-left: auto
}
.page-title-bar {
	margin-bottom: 1.5rem;
	padding: 0 1rem
}

@media (min-width:576px) {
.page-title-bar {
	padding-right: 0;
	padding-left: 0
}
}
.page-title-bar .btn-toolbar {
	margin-left: -.75rem
}
.page-title {
	margin-top: 0;
	font-size: 1.75rem
}
.page-title>small {
	font-size: 1rem;
	color: #888c9b
}

@media (min-width:768px) {
.page-title>small {
	font-size: .875rem
}
}
.page-section {
	padding-right: 15px;
	padding-left: 15px
}

@media (max-width:575.98px) {
.page-section>.card {
	border-radius: 0;
	border-width: 1px 0
}
}
.section-title {
	margin-top: 0;
	padding: 1rem 0;
	font-size: 1rem
}
.section-block {
	margin: 1rem 0
}

@media (max-width:575.98px) {
.section-block {
	padding-right: 1rem;
	padding-left: 1rem
}
}
.section-deck {
	display: flex;
	flex-direction: column
}

@media (min-width:1200px) {
.section-deck {
	flex-flow: row wrap;
	margin-right: -10px;
	margin-left: -10px
}
.section-deck .card {
	display: flex;
	flex: 1 0 0%;
	flex-direction: column;
	margin-right: 10px;
	margin-left: 10px
}
}

@media (min-width:992px) {
.section-columns {
	-moz-column-count: 2;
	column-count: 2;
	-moz-column-gap: 20px;
	column-gap: 20px
}
.section-columns>.section-item {
	display: inline-block;
	width: 100%;
	transform: translateZ(0);
	-webkit-column-break-inside: avoid
}
}
.page-sidebar {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	width: 100%;
	display: flex;
	flex-direction: column;
	width: 22.5rem;
	max-width: 22.5rem;
	background-color: #fff;
	border-left: 1px solid rgba(34,34,48,.1);
	box-shadow: none;
	overflow: auto;
	z-index: 1029;
	transform: translate3d(100%, 0, 0);
	transition: transform .2s ease-in-out
}

@media (max-width:575.98px) {
.page-sidebar {
	width: 100%;
	max-width: 100%
}
}
.page-sidebar-fixed {
	position: fixed;
	top: 3.5rem;
	overflow: auto
}
.has-sidebar-fluid .page-sidebar {
	width: 100%;
	max-width: 100%
}

@media (min-width:768px) {
.has-sidebar-fluid .page-sidebar {
	width: calc(100vw - 15rem);
	max-width: calc(100vw - 15rem)
}
}

@media (min-width:1200px) {
.has-sidebar-fluid .page-sidebar {
	width: calc(100vw - 37.5rem);
	max-width: calc(100vw - 37.5rem)
}
}
.sidebar-backdrop {
	display: none;
	position: fixed;
	top: 3.5rem;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: rgba(20,20,31,.38);
	z-index: 1028
}
.has-sidebar-open .page-sidebar {
	position: fixed;
	top: 3.5rem;
	transform: translateZ(0)
}
.has-sidebar-open .sidebar-backdrop {
	display: block;
	-webkit-animation: fadeInBackdrop .26s ease forwards;
	animation: fadeInBackdrop .26s ease forwards
}
.has-sidebar-expand-sm .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-sm .page-sidebar-fixed {
	position: fixed;
	top: 3.5rem
}
.has-sidebar-expand-sm .sidebar-backdrop {
	display: none
}

@media (max-width:575.98px) {
.has-sidebar-expand-sm.has-sidebar-open .page-sidebar {
	position: fixed;
	top: 3.5rem;
	transform: translateZ(0)
}
.has-sidebar-expand-sm.has-sidebar-open .sidebar-backdrop {
	display: block
}
}

@media (min-width:576px) {
.has-sidebar-expand-sm .app-main>.app-footer, .has-sidebar-expand-sm .page-inner {
	margin-right: 22.5rem
}
.has-sidebar-expand-sm .page-sidebar {
	transform: translateZ(0)
}
.has-sidebar-open .has-sidebar-expand-sm .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-sm.has-sidebar-fluid .page-inner {
	margin-right: calc(100vw - 37.5rem)
}
.has-sidebar-expand-sm.has-sidebar-fluid .page-sidebar {
	width: calc(100vw - 37.5rem);
	max-width: calc(100vw - 37.5rem)
}
}
.has-sidebar-expand-md .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-md .page-sidebar-fixed {
	position: fixed;
	top: 3.5rem
}
.has-sidebar-expand-md .sidebar-backdrop {
	display: none
}

@media (max-width:767.98px) {
.has-sidebar-expand-md.has-sidebar-open .page-sidebar {
	position: fixed;
	top: 3.5rem;
	transform: translateZ(0)
}
.has-sidebar-expand-md.has-sidebar-open .sidebar-backdrop {
	display: block
}
}

@media (min-width:768px) {
.has-sidebar-expand-md .app-main>.app-footer, .has-sidebar-expand-md .page-inner {
	margin-right: 22.5rem
}
.has-sidebar-expand-md .page-sidebar {
	transform: translateZ(0)
}
.has-sidebar-open .has-sidebar-expand-md .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-md.has-sidebar-fluid .page-inner {
	margin-right: calc(100vw - 37.5rem)
}
.has-sidebar-expand-md.has-sidebar-fluid .page-sidebar {
	width: calc(100vw - 37.5rem);
	max-width: calc(100vw - 37.5rem)
}
}
.has-sidebar-expand-lg .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-lg .page-sidebar-fixed {
	position: fixed;
	top: 3.5rem
}
.has-sidebar-expand-lg .sidebar-backdrop {
	display: none
}

@media (max-width:991.98px) {
.has-sidebar-expand-lg.has-sidebar-open .page-sidebar {
	position: fixed;
	top: 3.5rem;
	transform: translateZ(0)
}
.has-sidebar-expand-lg.has-sidebar-open .sidebar-backdrop {
	display: block
}
}

@media (min-width:992px) {
.has-sidebar-expand-lg .app-main>.app-footer, .has-sidebar-expand-lg .page-inner {
	margin-right: 22.5rem
}
.has-sidebar-expand-lg .page-sidebar {
	transform: translateZ(0)
}
.has-sidebar-open .has-sidebar-expand-lg .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-lg.has-sidebar-fluid .page-inner {
	margin-right: calc(100vw - 37.5rem)
}
.has-sidebar-expand-lg.has-sidebar-fluid .page-sidebar {
	width: calc(100vw - 37.5rem);
	max-width: calc(100vw - 37.5rem)
}
}
.has-sidebar-expand-xl .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-xl .page-sidebar-fixed {
	position: fixed;
	top: 3.5rem
}
.has-sidebar-expand-xl .sidebar-backdrop {
	display: none
}

@media (max-width:1199.98px) {
.has-sidebar-expand-xl.has-sidebar-open .page-sidebar {
	position: fixed;
	top: 3.5rem;
	transform: translateZ(0)
}
.has-sidebar-expand-xl.has-sidebar-open .sidebar-backdrop {
	display: block
}
}

@media (min-width:1200px) {
.has-sidebar-expand-xl .app-main>.app-footer, .has-sidebar-expand-xl .page-inner {
	margin-right: 22.5rem
}
.has-sidebar-expand-xl .page-sidebar {
	transform: translateZ(0)
}
.has-sidebar-open .has-sidebar-expand-xl .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand-xl.has-sidebar-fluid .page-inner {
	margin-right: calc(100vw - 37.5rem)
}
.has-sidebar-expand-xl.has-sidebar-fluid .page-sidebar {
	width: calc(100vw - 37.5rem);
	max-width: calc(100vw - 37.5rem)
}
}
.has-sidebar-expand .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand .page-sidebar-fixed {
	position: fixed;
	top: 3.5rem
}
.has-sidebar-expand .sidebar-backdrop {
	display: none
}
.has-sidebar-expand.has-sidebar-open .page-sidebar {
	position: fixed;
	top: 3.5rem;
	transform: translateZ(0)
}
.has-sidebar-expand.has-sidebar-open .sidebar-backdrop {
	display: block
}
.has-sidebar-expand .app-main>.app-footer, .has-sidebar-expand .page-inner {
	margin-right: 22.5rem
}
.has-sidebar-expand .page-sidebar {
	transform: translateZ(0)
}
.has-sidebar-open .has-sidebar-expand .page-sidebar {
	position: absolute;
	top: 0;
	transform: translate3d(100%, 0, 0)
}
.has-sidebar-expand.has-sidebar-fluid .page-inner {
	margin-right: calc(100vw - 37.5rem)
}
.has-sidebar-expand.has-sidebar-fluid .page-sidebar {
	width: calc(100vw - 37.5rem);
	max-width: calc(100vw - 37.5rem)
}
.sidebar-header {
	position: relative;
	padding: .5rem 1rem;
	display: flex;
	align-items: center;
	height: 3.5rem;
	background-color: #fff;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	z-index: 2
}
.sidebar-header .breadcrumb {
	margin-bottom: 0
}
.sidebar-title {
	margin: 1rem 0;
	font-size: .75rem;
	font-weight: 600;
	text-transform: uppercase
}
.sidebar-section {
	padding: 20px
}
.sidebar-section-fill {
	flex: 1;
	overflow-y: auto
}
.sidebar-section-fill:not(.sidebar-section)>.sidebar-title {
	margin-left: 1rem
}
.sidebar-footer {
	position: relative;
	padding: .5rem;
	background-color: #fff;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 -1px 3px 0 rgba(20,20,31,.15);
	z-index: 1
}
.app-footer {
	margin: 1.5rem 0;
	padding: 0 1rem;
	text-align: center
}

@media (min-width:992px) {
.app-footer {
	padding-right: 2rem;
	padding-left: 2rem
}
}
.page-inner>.app-footer {
	margin-top: 3rem;
	margin-bottom: 0
}
.rating-block {
	display: block
}
.rating {
	position: relative;
	display: inline-block;
	font-size: 1.25rem;
	vertical-align: middle
}
.rating-xs {
	font-size: .875rem
}
.rating-sm {
	font-size: 1rem
}
.rating-lg {
	font-size: 1.5rem
}
.rating>input[type=checkbox], .rating>input[type=radio], .rating>label {
	float: right;
	cursor: pointer
}
.rating>label {
	margin-bottom: 0;
	display: inline;
	color: #e6e8ed;
	line-height: 1
}
.rating>label:hover {
	color: #fbe3b9
}
.rating>label:hover~label {
	color: #f7c46c
}
.rating.has-readonly>label:hover, .rating.has-readonly>label:hover~label {
	color: #e6e8ed
}
.rating>input[type=checkbox], .rating>input[type=radio] {
	position: absolute;
	opacity: 0;
	z-index: -1
}
.rating>input[type=checkbox]:checked~label, .rating>input[type=radio]:checked~label {
	color: #f7c46c
}
.rating-blue>label:hover {
	color: #01b3f9
}
.rating-blue>input[type=checkbox]:checked~label, .rating-blue>input[type=radio]:checked~label, .rating-blue>label:hover~label {
	color: #0179a8
}
.rating-indigo>label:hover {
	color: #6496d1
}
.rating-indigo>input[type=checkbox]:checked~label, .rating-indigo>input[type=radio]:checked~label, .rating-indigo>label:hover~label {
	color: <?= $themeColor; ?>
}
.rating-purple>label:hover {
	color: #8874b4
}
.rating-purple>input[type=checkbox]:checked~label, .rating-purple>input[type=radio]:checked~label, .rating-purple>label:hover~label {
	color: #5f4b8b
}
.rating-pink>label:hover {
	color: #d2a2c5
}
.rating-pink>input[type=checkbox]:checked~label, .rating-pink>input[type=radio]:checked~label, .rating-pink>label:hover~label {
	color: #ff0538
}
.rating-red>label:hover {
	color: #f3a9a1
}
.rating-red>input[type=checkbox]:checked~label, .rating-red>input[type=radio]:checked~label, .rating-red>label:hover~label {
	color: #ea6759
}
.rating-orange>label:hover {
	color: #f5c4a7
}
.rating-orange>input[type=checkbox]:checked~label, .rating-orange>input[type=radio]:checked~label, .rating-orange>label:hover~label {
	color: #ec935e
}
.rating-yellow>label:hover {
	color: #fbe3b9
}
.rating-yellow>input[type=checkbox]:checked~label, .rating-yellow>input[type=radio]:checked~label, .rating-yellow>label:hover~label {
	color: #f7c46c
}
.rating-green>label:hover {
	color: #d4e3cb
}
.rating-green>input[type=checkbox]:checked~label, .rating-green>input[type=radio]:checked~label, .rating-green>label:hover~label {
	color: #a7c796
}
.rating-teal>label:hover {
	color: #00f4d0
}
.rating-teal>input[type=checkbox]:checked~label, .rating-teal>input[type=radio]:checked~label, .rating-teal>label:hover~label {
	color: #097b0a
}
.rating-cyan>label:hover {
	color: #5fafc9
}
.rating-cyan>input[type=checkbox]:checked~label, .rating-cyan>input[type=radio]:checked~label, .rating-cyan>label:hover~label {
	color: #3686a0
}
.rating-white>input[type=checkbox]:checked~label, .rating-white>input[type=radio]:checked~label, .rating-white>label:hover, .rating-white>label:hover~label {
	color: #fff
}
.rating-gray>label:hover {
	color: #b4b7c0
}
.rating-gray>input[type=checkbox]:checked~label, .rating-gray>input[type=radio]:checked~label, .rating-gray>label:hover~label {
	color: #888c9b
}
.rating-gray-dark>label:hover {
	color: #444460
}
.rating-gray-dark>input[type=checkbox]:checked~label, .rating-gray-dark>input[type=radio]:checked~label, .rating-gray-dark>label:hover~label {
	color: #222230
}
.switcher-control {
	margin-bottom: 0;
	position: relative;
	vertical-align: middle;
	font-weight: 700;
	font-size: .625rem;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	width: 2.125rem
}
.switcher-control .switcher-indicator {
	height: 1rem;
	line-height: 1rem;
	border-radius: 1rem
}
.switcher-control .switcher-indicator:before {
	right: 1.1875rem;
	width: 1rem;
	border-radius: 1rem
}
.switcher-control .switcher-label-off, .switcher-control .switcher-label-on {
	width: calc(100% - .75rem);
	line-height: 1rem
}
.switcher-control-lg {
	width: 3.1875rem
}
.switcher-control-lg .switcher-indicator {
	height: 1.5rem;
	line-height: 1.5rem;
	border-radius: 1.5rem
}
.switcher-control-lg .switcher-indicator:before {
	right: 1.71875rem;
	width: 1.5rem;
	border-radius: 1.5rem
}
.switcher-control-lg .switcher-label-off, .switcher-control-lg .switcher-label-on {
	width: calc(100% - 1.25rem);
	line-height: 1.5rem
}
.switcher-input {
	position: absolute;
	height: 0;
	width: 0;
	z-index: -1;
	opacity: 0
}
.switcher-input:focus+.switcher-indicator {
	box-shadow: 0 .5rem 1rem rgba(20,20,31,.15)
}
.switcher-indicator {
	margin-bottom: 0;
	display: block;
	overflow: hidden;
	cursor: pointer;
	padding: 0;
	border: 2px solid #e6e8ed;
	background-color: #e6e8ed;
	transition: all .15s linear
}
.switcher-indicator:before {
	content: "";
	position: absolute;
	top: 0;
	bottom: 0;
	display: block;
	margin: 0;
	background: #fff;
	border: 2px solid #e6e8ed;
	transition: all .15s ease-in-out
}
.switcher-input:checked+.switcher-indicator, .switcher-input:checked+.switcher-indicator:before {
	border-color: <?= $themeColor; ?>
}
.switcher-input:checked+.switcher-indicator {
	background-color: <?= $themeColor; ?>
}
.switcher-input:checked+.switcher-indicator:before {
	right: 0;
	box-shadow: none
}
.disabled>.switcher-input, .switcher-input:disabled {
	pointer-events: none
}
.disabled>.switcher-input+.switcher-indicator, .switcher-input:disabled+.switcher-indicator {
	opacity: .38;
	cursor: default
}
.switcher-label-off, .switcher-label-on {
	position: absolute;
	top: 0;
	height: 100%;
	text-align: center
}
.switcher-label-on {
	display: none;
	left: 0;
	color: #fff
}
.switcher-input:checked~.switcher-label-on {
	display: block
}
.switcher-label-off {
	display: block;
	right: 0;
	color: #888c9b
}
.switcher-input:checked~.switcher-label-off {
	display: none
}
.switcher-control-success .switcher-input:checked+.switcher-indicator, .switcher-control-success .switcher-input:checked+.switcher-indicator:before {
	border-color: #097b0a
}
.switcher-control-success .switcher-input:checked+.switcher-indicator {
	background-color: #097b0a
}
.switcher-control-success .switcher-label-on {
	color: #fff
}
.switcher-control-danger .switcher-input:checked+.switcher-indicator, .switcher-control-danger .switcher-input:checked+.switcher-indicator:before {
	border-color: #ff0538
}
.switcher-control-danger .switcher-input:checked+.switcher-indicator {
	background-color: #ff0538
}
.switcher-control-danger .switcher-label-on {
	color: #fff
}
.list-icons {
	padding-left: 0;
	margin-left: 1.5rem;
	list-style-type: none
}
.list-icons>li {
	position: relative
}
.list-icons>li:not(:last-child) {
	margin-bottom: .25rem
}
.list-icons .list-icon {
	position: absolute;
	left: -1.5rem;
	width: 1rem;
	font-size: 1em;
	text-align: center
}
.list-icons .list-icon>img {
	margin-top: -.25rem
}
.tile-wrapper {
	display: inline-block;
	text-align: center
}
.tile-wrapper .tile {
	margin-bottom: .25rem
}
.tile-wrapper .tile-peek {
	display: block;
	font-size: .875rem
}
a.tile-wrapper .tile-peek {
	color: #888c9b
}
a.tile-wrapper:focus {
	text-decoration: none
}
a.tile-wrapper:focus .tile-peek {
	color: #363642
}
a.tile-wrapper:hover {
	text-decoration: none
}
a.tile-wrapper:hover .tile-peek {
	color: #363642
}
.tile {
	display: inline-block;
	width: 2rem;
	height: 2rem;
	color: #888c9b;
	font-weight: 600;
	font-size: 1rem;
	background-color: #e6e8ed;
	line-height: 2rem;
	text-align: center;
	vertical-align: middle;
	border-radius: .25rem
}
.tile-img {
	position: relative;
	background-color: transparent;
	overflow: hidden
}
.tile.bg-primary {
	color: #fff
}
.tile.bg-secondary {
	color: #363642
}
.tile.bg-info, .tile.bg-success {
	color: #fff
}
.tile.bg-warning {
	color: #363642
}
.tile.bg-danger {
	color: #fff
}
.tile.bg-light {
	color: #363642
}
.tile.bg-dark {
	color: #fff
}
.tile-xxl {
	width: 8rem;
	height: 8rem;
	line-height: 8rem;
	font-size: 3rem
}
.tile-xl {
	width: 5rem;
	height: 5rem;
	line-height: 5rem;
	font-size: 2rem
}
.tile-lg {
	width: 3rem;
	height: 3rem;
	line-height: 3rem;
	font-size: 1.25rem
}
.tile-md {
	width: 2.25rem;
	height: 2.25rem;
	line-height: 2.25rem
}
.tile-sm {
	width: 1.5rem;
	height: 1.5rem;
	font-size: .75rem;
	line-height: 1.5rem
}
.tile-xs {
	width: 1.25rem;
	height: 1.25rem;
	font-size: .75rem;
	line-height: 1.25rem
}
.tile-lg, .tile-xl, .tile-xxl {
	border-radius: .3rem
}
.tile-circle {
	border-radius: 4rem
}
.tile>img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	-o-object-fit: cover;
	object-fit: cover;
	-o-object-position: top;
	object-position: top
}
a.tile {
	outline: 0;
	background-color: #d7dae2
}
a.tile:focus, a.tile:hover {
	color: #363642;
	text-decoration: none
}
a.tile.bg-primary:focus, a.tile.bg-primary:hover {
	color: #fff
}
a.tile.bg-secondary:focus, a.tile.bg-secondary:hover {
	color: #363642
}
a.tile.bg-info:focus, a.tile.bg-info:hover, a.tile.bg-success:focus, a.tile.bg-success:hover {
	color: #fff
}
a.tile.bg-warning:focus, a.tile.bg-warning:hover {
	color: #363642
}
a.tile.bg-danger:focus, a.tile.bg-danger:hover {
	color: #fff
}
a.tile.bg-light:focus, a.tile.bg-light:hover {
	color: #363642
}
.tile.bg-blue, .tile.bg-indigo, .tile.bg-pink, .tile.bg-purple, .tile.bg-red, a.tile.bg-blue:focus, a.tile.bg-blue:hover, a.tile.bg-dark:focus, a.tile.bg-dark:hover, a.tile.bg-indigo:focus, a.tile.bg-indigo:hover, a.tile.bg-pink:focus, a.tile.bg-pink:hover, a.tile.bg-purple:focus, a.tile.bg-purple:hover, a.tile.bg-red:focus, a.tile.bg-red:hover {
	color: #fff
}
.tile.bg-green, .tile.bg-orange, .tile.bg-yellow, a.tile.bg-green:focus, a.tile.bg-green:hover, a.tile.bg-orange:focus, a.tile.bg-orange:hover, a.tile.bg-yellow:focus, a.tile.bg-yellow:hover {
	color: #363642
}
.tile.bg-cyan, .tile.bg-teal, a.tile.bg-cyan:focus, a.tile.bg-cyan:hover, a.tile.bg-teal:focus, a.tile.bg-teal:hover {
	color: #fff
}
.tile.bg-white, a.tile.bg-white:focus, a.tile.bg-white:hover {
	color: #363642
}
.tile.bg-gray, .tile.bg-gray-dark, a.tile.bg-gray-dark:focus, a.tile.bg-gray-dark:hover, a.tile.bg-gray:focus, a.tile.bg-gray:hover {
	color: #fff
}
.user-avatar {
	position: relative;
	margin-bottom: 0;
	display: inline-block;
	width: 2rem;
	height: 2rem;
	font-size: 2rem;
	vertical-align: middle;
	border-radius: 4rem
}
.user-avatar-xxl {
	width: 8rem;
	height: 8rem;
	font-size: 8rem
}
.user-avatar-xl {
	width: 5rem;
	height: 5rem;
	font-size: 5rem
}
.user-avatar-lg {
	width: 3rem;
	height: 3rem;
	font-size: 3rem
}
.user-avatar-md {
	width: 2.25rem;
	height: 2.25rem;
	font-size: 2.25rem
}
.user-avatar-sm {
	width: 1.5rem;
	height: 1.5rem;
	font-size: 1.5rem
}
.user-avatar-xs {
	width: 1.25rem;
	height: 1.25rem;
	font-size: 1.25rem
}
.user-avatar.dropdown .dropdown-menu {
	min-width: 6rem
}
.user-avatar.dropdown.focus .avatar-badge>.oi:before, .user-avatar.dropdown.show .avatar-badge>.oi:before, .user-avatar.dropdown:focus .avatar-badge>.oi:before, .user-avatar.dropdown:hover .avatar-badge>.oi:before {
	content: "\e02d"
}
.user-avatar.dropdown.focus .avatar-badge>.fa:before, .user-avatar.dropdown.show .avatar-badge>.fa:before, .user-avatar.dropdown:focus .avatar-badge>.fa:before, .user-avatar.dropdown:hover .avatar-badge>.fa:before {
	content: "\f0d7"
}
.user-avatar.dropdown.focus .offline, .user-avatar.dropdown.show .offline, .user-avatar.dropdown:focus .offline, .user-avatar.dropdown:hover .offline {
	color: #fff
}
.user-avatar>a {
	color: inherit;
	outline: 0
}
.user-avatar>a:focus, .user-avatar>a:hover {
	color: inherit;
	text-decoration: none
}
.user-avatar audio, .user-avatar canvas, .user-avatar img, .user-avatar video {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 4rem;
	-o-object-fit: cover;
	object-fit: cover;
	-o-object-position: top;
	object-position: top
}
a.user-avatar:focus, a.user-avatar:hover {
	outline: 0
}
a.user-avatar:focus {
	box-shadow: 0 0 0 3px <?= $themeColor; ?>
}
.user-avatar-lg .avatar-badge {
	right: 5px
}
.user-avatar-sm .avatar-badge, .user-avatar-xs .avatar-badge {
	right: -2px
}
.user-avatar-floated {
	margin-top: -50%;
	box-shadow: 0 0 0 2px #fff;
	z-index: 2
}
.user-avatar-floated.user-avatar-xl {
	box-shadow: 0 0 0 3px #fff
}
.user-avatar-floated.user-avatar-xxl {
	box-shadow: 0 0 0 4px #fff
}
.avatar-group {
	display: inline-block
}
.avatar-group .user-avatar {
	box-shadow: 0 0 0 2px #fff
}
.avatar-group .user-avatar:focus, .avatar-group .user-avatar:hover {
	z-index: 2
}
.avatar-group .user-avatar+.user-avatar {
	display: inline-block;
	margin-left: -.5em
}
.avatar-group-animated .user-avatar:first-child {
	-webkit-animation: avatarAnimatedStart 1s;
	animation: avatarAnimatedStart 1s
}
.avatar-group-animated .user-avatar:nth-child(2) {
	-webkit-animation: avatarAnimated .75s;
	animation: avatarAnimated .75s
}
.avatar-group-animated .user-avatar:nth-child(3) {
	-webkit-animation: avatarAnimated 1s;
	animation: avatarAnimated 1s
}
.avatar-group-animated .user-avatar:nth-child(4) {
	-webkit-animation: avatarAnimated 1.25s;
	animation: avatarAnimated 1.25s
}
.avatar-group-animated .user-avatar:nth-child(5) {
	-webkit-animation: avatarAnimated 1.5s;
	animation: avatarAnimated 1.5s
}
.avatar-group-animated .tile {
	-webkit-animation: avatarAnimatedEnd 1.5s;
	animation: avatarAnimatedEnd 1.5s
}
@-webkit-keyframes avatarAnimatedStart {
0% {
opacity:0
}
to {
opacity:1
}
}
@keyframes avatarAnimatedStart {
0% {
opacity:0
}
to {
opacity:1
}
}
@-webkit-keyframes avatarAnimated {
0% {
opacity:0;
transform:translateX(-100%)
}
25% {
opacity:0;
transform:translateX(-75%)
}
to {
opacity:1;
transform:translateX(0)
}
}
@keyframes avatarAnimated {
0% {
opacity:0;
transform:translateX(-100%)
}
25% {
opacity:0;
transform:translateX(-75%)
}
to {
opacity:1;
transform:translateX(0)
}
}
@-webkit-keyframes avatarAnimatedEnd {
0% {
opacity:0;
transform:translateX(100%)
}
25% {
opacity:0;
transform:translateX(75%)
}
to {
opacity:1;
transform:translateX(0)
}
}
@keyframes avatarAnimatedEnd {
0% {
opacity:0;
transform:translateX(100%)
}
25% {
opacity:0;
transform:translateX(75%)
}
to {
opacity:1;
transform:translateX(0)
}
}
.avatar-badge {
	position: absolute;
	right: 1px;
	bottom: 0;
	display: block;
	width: 8px;
	height: 8px;
	line-height: 1;
	text-align: center;
	font-size: 8px;
	color: #fff;
	background-color: #a6abbd;
	border-radius: 8px;
	box-shadow: 0 0 0 2px #fff;
	z-index: 2
}
.avatar-badge.has-indicator {
	width: 10px;
	height: 10px
}
.avatar-badge.online {
	background-color: #097b0a
}
.avatar-badge.idle {
	background-color: #ec935e
}
.avatar-badge.busy {
	background-color: #ea6759
}
.avatar-badge.offline {
	color: #a6abbd;
	background-color: #a6abbd
}
.avatar-badge .fa {
	line-height: 10px
}
.mention {
	padding: 0 .125rem;
	font-size: 87.5%;
	font-weight: 500;
	background-color: rgba(52,108,176,.08);
	border-radius: .25rem;
	word-break: break-word
}
.mention, a.mention {
	color: <?= $themeColor; ?>
}
a.mention:hover {
	color: #285489;
	text-decoration: none
}
.hashtag {
	font-weight: 500
}
.event {
	padding: .25rem .5rem;
	border-radius: 0;
	background-color: rgba(246,247,249,.08);
	border: solid #f6f7f9;
	border-width: 0 0 0 3px
}
a.event:focus, a.event:hover {
	background-color: rgba(246,247,249,.12);
	text-decoration: none
}
.event.event-primary {
	color: #2e609c;
	background-color: rgba(52,108,176,.08);
	border-color: <?= $themeColor; ?>
}
a.event.event-primary:focus, a.event.event-primary:hover {
	background-color: rgba(52,108,176,.12)
}
.event.event-secondary {
	color: #e7e9ef;
	background-color: rgba(246,247,249,.08);
	border-color: #f6f7f9
}
a.event.event-secondary:focus, a.event.event-secondary:hover {
	background-color: rgba(246,247,249,.12)
}
.event.event-success {
	color: #008974;
	background-color: rgba(0,162,138,.08);
	border-color: #097b0a
}
a.event.event-success:focus, a.event.event-success:hover {
	background-color: rgba(0,162,138,.12)
}
.event.event-info {
	color: #01678f;
	background-color: rgba(1,121,168,.08);
	border-color: #0179a8
}
a.event.event-info:focus, a.event.event-info:hover {
	background-color: rgba(1,121,168,.12)
}
.event.event-warning {
	color: #f6ba54;
	background-color: rgba(247,196,108,.08);
	border-color: #f7c46c
}
a.event.event-warning:focus, a.event.event-warning:hover {
	background-color: rgba(247,196,108,.12)
}
.event.event-danger {
	color: #af5a98;
	background-color: rgba(183,107,163,.08);
	border-color: #ff0538
}
a.event.event-danger:focus, a.event.event-danger:hover {
	background-color: rgba(183,107,163,.12)
}
.event.event-light {
	color: #e7e9ef;
	background-color: rgba(246,247,249,.08);
	border-color: #f6f7f9
}
a.event.event-light:focus, a.event.event-light:hover {
	background-color: rgba(246,247,249,.12)
}
.event.event-dark {
	color: #171721;
	background-color: rgba(34,34,48,.08);
	border-color: #222230
}
a.event.event-dark:focus, a.event.event-dark:hover {
	background-color: rgba(34,34,48,.12)
}
.event-blue {
	color: #01678f;
	background-color: rgba(1,121,168,.08);
	border-color: #0179a8
}
a.event-blue:focus, a.event-blue:hover {
	background-color: rgba(1,121,168,.12)
}
.event-indigo {
	color: #2e609c;
	background-color: rgba(52,108,176,.08);
	border-color: <?= $themeColor; ?>
}
a.event-indigo:focus, a.event-indigo:hover {
	background-color: rgba(52,108,176,.12)
}
.event-purple {
	color: #54427a;
	background-color: rgba(95,75,139,.08);
	border-color: #5f4b8b
}
a.event-purple:focus, a.event-purple:hover {
	background-color: rgba(95,75,139,.12)
}
.event-pink {
	color: #af5a98;
	background-color: rgba(183,107,163,.08);
	border-color: #ff0538
}
a.event-pink:focus, a.event-pink:hover {
	background-color: rgba(183,107,163,.12)
}
.event-red {
	color: #e75242;
	background-color: rgba(234,103,89,.08);
	border-color: #ea6759
}
a.event-red:focus, a.event-red:hover {
	background-color: rgba(234,103,89,.12)
}
.event-orange {
	color: #e98447;
	background-color: rgba(236,147,94,.08);
	border-color: #ec935e
}
a.event-orange:focus, a.event-orange:hover {
	background-color: rgba(236,147,94,.12)
}
.event-yellow {
	color: #f6ba54;
	background-color: rgba(247,196,108,.08);
	border-color: #f7c46c
}
a.event-yellow:focus, a.event-yellow:hover {
	background-color: rgba(247,196,108,.12)
}
.event-green {
	color: #99be85;
	background-color: rgba(167,199,150,.08);
	border-color: #a7c796
}
a.event-green:focus, a.event-green:hover {
	background-color: rgba(167,199,150,.12)
}
.event-teal {
	color: #008974;
	background-color: rgba(0,162,138,.08);
	border-color: #097b0a
}
a.event-teal:focus, a.event-teal:hover {
	background-color: rgba(0,162,138,.12)
}
.event-cyan {
	color: #30768d;
	background-color: rgba(54,134,160,.08);
	border-color: #3686a0
}
a.event-cyan:focus, a.event-cyan:hover {
	background-color: rgba(54,134,160,.12)
}
.event-white {
	color: #f2f2f2;
	background-color: hsla(0,0%,100%,.08);
	border-color: #fff
}
a.event-white:focus, a.event-white:hover {
	background-color: hsla(0,0%,100%,.12)
}
.event-gray {
	color: #7a7f8f;
	background-color: rgba(136,140,155,.08);
	border-color: #888c9b
}
a.event-gray:focus, a.event-gray:hover {
	background-color: rgba(136,140,155,.12)
}
.event-gray-dark {
	color: #171721;
	background-color: rgba(34,34,48,.08);
	border-color: #222230
}
a.event-gray-dark:focus, a.event-gray-dark:hover {
	background-color: rgba(34,34,48,.12)
}
.hamburger {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: .5rem;
	cursor: pointer;
	height: 2.25rem;
	width: 2.25rem;
	transition: background-color .3s linear;
	font: inherit;
	color: inherit;
	text-transform: none;
	background-color: transparent;
	border: 0;
	border-radius: .25rem;
	margin: 0;
	overflow: visible;
	outline: 0
}
.hamburger-sm .hamburger-inner {
	transform: scale(.8)
}
.hamburger.focus, .hamburger:focus, .hamburger:hover {
	background-color: hsla(0,0%,100%,.05);
	outline: 0
}
.hamburger:active {
	background-color: rgba(20,20,31,.05)
}
.hamburger-box {
	width: 1.25rem;
	height: 1.25rem;
	display: inline-block;
	position: relative
}
.hamburger-inner {
	display: block;
	top: 50%;
	margin-top: -1px
}
.hamburger-inner, .hamburger-inner:after, .hamburger-inner:before {
	width: 1.25rem;
	height: 2px;
	background-color: #fff;
	border-radius: 2px;
	position: absolute;
	transition-property: transform;
	transition-duration: .15s;
	transition-timing-function: ease
}
.hamburger-inner:after, .hamburger-inner:before {
	content: "";
	display: block
}
.hamburger-inner:before {
	top: -6px
}
.hamburger-inner:after {
	bottom: -6px
}
.hamburger-light .hamburger-inner, .hamburger-light .hamburger-inner:after, .hamburger-light .hamburger-inner:before {
	background-color: #222230
}
.hamburger-arrow.active .hamburger-inner:before, .hamburger-arrow[aria-expanded=true] .hamburger-inner:before {
	transform: translate3d(-.25rem, 1px, 0) rotate(-45deg) scaleX(.7)
}
.hamburger-arrow.active .hamburger-inner:after, .hamburger-arrow[aria-expanded=true] .hamburger-inner:after {
	transform: translate3d(-.25rem, -1px, 0) rotate(45deg) scaleX(.7)
}
.hamburger-squeeze .hamburger-inner {
	transition-duration: 75ms;
	transition-timing-function: cubic-bezier(.55, .055, .675, .19)
}
.hamburger-squeeze .hamburger-inner:before {
	transition: top 75ms ease .12s, opacity 75ms ease
}
.hamburger-squeeze .hamburger-inner:after {
	transition: bottom 75ms ease .12s, transform 75ms cubic-bezier(.55, .055, .675, .19)
}
.hamburger-squeeze.active .hamburger-inner, .hamburger-squeeze[aria-expanded=true] .hamburger-inner {
	transform: rotate(45deg);
	transition-delay: .12s;
	transition-timing-function: cubic-bezier(.215, .61, .355, 1)
}
.hamburger-squeeze.active .hamburger-inner:before, .hamburger-squeeze[aria-expanded=true] .hamburger-inner:before {
	top: 0;
	opacity: 0;
	transition: top 75ms ease, opacity 75ms ease .12s
}
.hamburger-squeeze.active .hamburger-inner:after, .hamburger-squeeze[aria-expanded=true] .hamburger-inner:after {
	bottom: 0;
	transform: rotate(-90deg);
	transition: bottom 75ms ease, transform 75ms cubic-bezier(.215, .61, .355, 1) .12s
}
.card-figure {
	position: relative;
	padding: 10px;
	border-radius: 2px
}
.card-figure.is-hoverable {
	transition: transform .2s, box-shadow .2s
}
.card-figure.is-hoverable:focus, .card-figure.is-hoverable:hover {
	transform: translate3d(0, -.25rem, 0);
	box-shadow: 0 5px 15px 0 rgba(20,20,31,.15)
}
.card-figure:hover .img-link {
	opacity: 1
}
.card-figure:hover .figure-action {
	opacity: 1;
	transform: translateZ(0);
	z-index: 2
}
.card-figure .figure {
	display: flex;
	flex-direction: column;
	margin-bottom: 0
}
.card-figure .figure-caption {
	display: block;
	margin-top: 10px;
	font-size: .875rem;
	color: inherit
}

@media (min-width:768px) {
.card-figure .figure-caption {
	font-size: .75rem
}
}
.figure-title {
	margin: 0 0 .125rem;
	text-transform: capitalize;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}

@media (min-width:768px) {
.figure-title {
	font-size: .875rem
}
}
.figure-title a:focus, .figure-title a:hover {
	color: #363642;
	text-decoration: none
}
.figure-img {
	position: relative;
	margin-bottom: 0;
	overflow: hidden
}
.figure-img .img-link {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: hsla(0,0%,100%,.96);
	opacity: 0;
	z-index: 2;
	transition: opacity .2s ease
}
.figure-img .img-link .tile {
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -1rem;
	margin-left: -1rem
}
.figure-img .img-link:focus, .figure-img .img-link:hover {
	opacity: 1;
	outline: 0
}
.figure-tools {
	position: absolute;
	top: 0;
	right: 0;
	left: 0;
	display: flex;
	align-items: flex-start;
	padding: .5rem;
	opacity: 0;
	z-index: 2;
	transition: opacity .3s ease
}
.figure-tools .tile {
	background-color: #fff
}
.figure-tools .tile:focus, .figure-tools .tile:hover {
	background-color: #f6f7f9
}
.card-figure:hover .figure-tools {
	opacity: 1
}
.figure-attachment {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 8rem;
	background-color: #f6f7f9;
	overflow: hidden
}
.figure-attachment>img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	min-height: 100%;
	-o-object-fit: cover;
	object-fit: cover;
	-o-object-position: center;
	object-position: center
}
.figure-action {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	display: block;
	opacity: 0;
	transform: translate3d(0, 100%, 0);
	transition: all .3s ease
}
.figure-action .btn-block {
	border-radius: 0
}
.figure-description {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	padding: 2.25rem .5rem;
	background-color: hsla(0,0%,100%,.96);
	opacity: 0;
	transition: all .3s ease;
	z-index: 1
}
.card-figure:hover .figure-description {
	opacity: 1
}
.outbound-link {
	margin-bottom: 1.25rem;
	padding: 1.25rem;
	display: block;
	color: #363642;
	border: 1px solid rgba(34,34,48,.1);
	border-radius: .25rem
}
.outbound-link:focus, .outbound-link:hover {
	color: #363642;
	text-decoration: none;
	border-color: #a6abbd
}
.outbound-link .outbound-title {
	margin: 0;
	font-size: 1rem;
	font-weight: 400
}
.outbound-link .outbound-text {
	margin-bottom: 0;
	font-size: .875rem
}
.steps {
	display: flex;
	margin: 1.25rem 0;
	font-weight: 400
}
.steps ul {
	display: flex;
	margin: 0 auto;
	padding-left: 0;
	list-style: none;
	background-color: #e6e8ed;
	align-items: flex-start;
	flex-wrap: nowrap;
	border-radius: 999px
}
.steps li {
	position: relative;
	overflow: hidden;
	max-width: 100%
}
.steps li:first-child:before {
	display: none
}
.steps li:first-child a {
	border-top-left-radius: 999px;
	border-bottom-left-radius: 999px
}
.steps li:last-child a {
	border-top-right-radius: 999px;
	border-bottom-right-radius: 999px
}
.steps li:before {
	content: "";
	position: absolute;
	top: 2px;
	left: -.875rem;
	z-index: 1;
	display: block;
	height: 1.75rem;
	width: 1.75rem;
	border: 2px solid #fff;
	border-top-right-radius: .5rem;
	background-color: #e6e8ed;
	transform: rotate(45deg)
}
.steps li:hover+li:before, .steps li:hover a {
	background-color: #dde0e7
}
.steps li:hover a {
	text-decoration: none
}
.steps a {
	display: block;
	padding: 5px .875rem 6px 1.75rem;
	text-align: center;
	color: #363642;
	line-height: 1.25rem;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}
.steps a:focus, .steps a:hover {
	text-decoration: none
}
.steps a>span:last-child {
	margin-left: 5px
}
.step-indicator {
	display: inline-block;
	width: 1.25rem;
	height: 1.25rem;
	font-size: 1rem;
	color: #fff;
	text-align: center;
	background-color: #a6abbd;
	line-height: 1.25rem;
	border-radius: 1.25rem
}
.step-indicator-icon {
	background-color: transparent;
	color: #888c9b
}
.step-indicator-icon>.fa {
	margin-top: 2px
}
.steps .active+li:before, .steps .active a {
	background-color: <?= $themeColor; ?>
}
.steps .active .step-indicator, .steps .active a {
	color: #fff
}
.steps .active:hover+li:before, .steps .active:hover a {
	background-color: #3165a4
}
.steps .active:hover a {
	color: #fff
}
.steps .success+li:before, .steps .success a {
	background-color: #097b0a
}
.steps .success .step-indicator, .steps .success a {
	color: #fff
}
.steps .success:hover+li:before, .steps .success:hover a {
	background-color: #00937d
}
.steps .success:hover a {
	color: #fff
}
.steps .error+li:before, .steps .error a {
	background-color: #ea6759
}
.steps .error .step-indicator, .steps .error a {
	color: #fff
}
.steps .error:hover+li:before, .steps .error:hover a {
	background-color: #e85b4b
}
.steps .error:hover a {
	color: #fff
}
.steps-float {
	margin: 0;
	transform: translate3d(0, -50%, 0)
}
.bs-stepper .content.dstepper-block {
	display: block
}
.bs-stepper .content.dstepper-none, .bs-stepper .content:not(.fade) {
	display: none
}
.bs-stepper .content.active:not(.fade) {
	display: block
}
.bs-stepper .content.fade {
	visibility: hidden;
	transition-duration: .3s;
	transition-property: opacity
}
.bs-stepper .content.fade.active {
	visibility: visible;
	opacity: 1
}
.bs-stepper.vertical .content {
	visibility: hidden;
	display: inherit
}
.bs-stepper.vertical .content.fade.dstepper-none {
	visibility: hidden
}
.bs-stepper.vertical .content.active {
	visibility: visible
}
.todo-list-bordered>.todo-header:not(:first-child), .todo-list-bordered>.todo:not(:first-child) {
	border-top: 1px solid #ecedf1
}
.todo-list-bordered .todo {
	border-radius: 0;
	padding: .5rem .25rem
}
.todo-list-bordered .todo-header+.todo {
	border-top: 0
}
.todo-header {
	padding: 1rem 0;
	font-size: .75rem;
	font-weight: 600;
	color: #888c9b
}
.todo-header:first-child {
	padding-top: 0
}
.todo {
	display: flex;
	min-height: calc(1.5em + .75rem + 2px);
	align-items: center;
	border-radius: .25rem
}

@media (min-width:768px) {
.todo {
	min-height: 2.25rem
}
}
.todo:hover {
	background-color: #f6f7f9
}
.todo:hover .todo-actions {
	display: block
}
.todo .custom-control {
	padding-left: 2rem;
	flex: 1
}
.todo .custom-control-label {
	display: block
}
.todo .custom-control-label:after, .todo .custom-control-label:before {
	left: -2rem
}
.todo .custom-control-input:checked+.custom-control-label {
	color: #888c9b;
	text-decoration: line-through
}
.todo-actions {
	margin-left: auto;
	display: none
}
.progress-list {
	display: flex;
	position: relative;
	margin-bottom: 1.25rem;
	margin-left: 0;
	padding-left: 0;
	list-style: none;
	font-weight: 400
}
.progress-list>li {
	position: relative;
	width: 100%;
	text-align: center
}
.progress-list>li:before {
	content: "";
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -1px;
	width: 100%;
	height: 3px;
	background-color: rgba(34,34,48,.1)
}
.progress-list>li:last-child:before {
	display: none
}
.progress-list>li>button {
	padding: 0;
	position: relative;
	display: inline-block;
	width: 1rem;
	height: 1rem;
	background-color: #c6c9d5;
	color: rgba(34,34,48,.1);
	border: 4px solid #f6f7f9;
	vertical-align: middle;
	border-radius: 1rem;
	line-height: 1;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	white-space: normal;
	z-index: 1
}
.progress-list>li>button:active, .progress-list>li>button:focus {
	outline: 0;
	box-shadow: 0 0 0 2px <?= $themeColor; ?>
}
.progress-list>.error>button, .progress-list>.success>button {
	width: 24px;
	height: 24px
}
.progress-list .progress-indicator {
	display: none;
	width: 1rem;
	height: 1rem;
	background-size: cover;
	background-repeat: no-repeat
}
.progress-list .progress-label {
	display: inline-block;
	position: absolute;
	top: 1.75rem;
	left: 50%;
	transform: translate3d(-50%, 0, 0);
	font-size: .875rem;
	color: #888c9b
}
.progress-list>.active:before {
	background-color: <?= $themeColor; ?>
}
.progress-list>.active>button {
	color: <?= $themeColor; ?>;
	background-color: <?= $themeColor; ?>;
	border-color: <?= $themeColor; ?>
}
.progress-list>.active>button:active, .progress-list>.active>button:focus {
	box-shadow: 0 0 0 2px <?= $themeColor; ?>
}
.progress-list>.active .progress-indicator {
	color: <?= $themeColor; ?>
}
.progress-list>.active:before {
	background-color: rgba(34,34,48,.1)
}
.progress-list>.active>button {
	background-color: #fff
}
.progress-list>.active .progress-label {
	color: #363642
}
.progress-list>.success:before {
	background-color: <?= $themeColor; ?>
}
.progress-list>.success>button {
	color: <?= $themeColor; ?>;
	background-color: #fff;
	border-color: #fff
}
.progress-list>.success>button:active, .progress-list>.success>button:focus {
	box-shadow: 0 0 0 2px <?= $themeColor; ?>
}
.progress-list>.success .progress-indicator {
	color: <?= $themeColor; ?>
}
.progress-list>.success .progress-label {
	color: #363642
}
.progress-list>.error:before {
	background-color: #ea6759
}
.progress-list>.error>button {
	color: #ea6759;
	background-color: #fff;
	border-color: #fff
}
.progress-list>.error>button:active, .progress-list>.error>button:focus {
	box-shadow: 0 0 0 2px #ea6759
}
.progress-list>.error .progress-indicator {
	color: #ea6759
}
.progress-list>.error:before {
	background-color: rgba(34,34,48,.1)
}
.progress-list>.active .progress-indicator, .progress-list>.error .progress-indicator, .progress-list>.success .progress-indicator {
	display: inline-block
}
.progress-list>.success .progress-indicator {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%2300A28A' viewBox='0 0 24 24'%3E%3Cpath d='M12 .9C5.9.9.9 5.9.9 12s5 11.1 11.1 11.1 11.1-5 11.1-11.1S18.1.9 12 .9zm6.2 8.3l-7.1 7.2c-.3.3-.7.3-1 0l-3.9-3.9c-.2-.3-.2-.8 0-1.1l1-1c.3-.2.8-.2 1.1 0l2 2.1c.2.2.5.2.7 0l5.2-5.3c.2-.3.7-.3 1 0l1 1c.3.2.3.7 0 1z'/%3E%3C/svg%3E")
}
.progress-list>.error .progress-indicator {
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23EA6759' viewBox='0 0 24 24'%3E%3Cpath xmlns='http://www.w3.org/2000/svg' d='M12 .9C5.9.9.9 5.9.9 12s5 11.1 11.1 11.1 11.1-5 11.1-11.1S18.1.9 12 .9zm2.3 11.5l3.6 3.6c.1.2.1.4 0 .6l-1.3 1.3c-.2.2-.5.2-.7 0l-3.6-3.6c-.2-.2-.4-.2-.6 0l-3.6 3.6c-.2.2-.5.2-.7 0l-1.3-1.3c-.1-.2-.1-.4 0-.6l3.6-3.6c.2-.2.2-.5 0-.7L6.1 8.1c-.2-.2-.2-.5 0-.7l1.3-1.3c.2-.1.4-.1.6 0l3.7 3.7c.2.2.4.2.6 0l3.6-3.6c.2-.2.5-.2.7 0l1.3 1.3c.1.2.1.4 0 .6l-3.6 3.6c-.2.2-.2.5 0 .7z'/%3E%3C/svg%3E")
}
.visual-picker {
	position: relative;
	display: inline-block;
	margin-bottom: 1rem
}
.visual-picker-sm .visual-picker-figure {
	width: 4rem;
	height: 4rem
}
.visual-picker-sm .visual-picker-figure:after {
	content: ""
}
.visual-picker-lg .visual-picker-figure {
	width: 12rem;
	height: 12rem
}
.visual-picker-lg .visual-picker-figure:after {
	top: 1rem;
	right: 1rem;
	font-size: 1.25rem
}
.visual-picker-fluid, .visual-picker-fluid .visual-picker-figure {
	width: 100%
}
.visual-picker.has-peek {
	padding-bottom: 1.5rem
}
.visual-picker.has-peek .visual-picker-figure {
	margin-bottom: .5em
}
.visual-picker:focus .visual-picker-figure, .visual-picker:hover .visual-picker-figure {
	box-shadow: inset 0 0 0 2px <?= $themeColor; ?>, 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.visual-picker input[type=checkbox], .visual-picker input[type=radio] {
	width: 1px;
	height: 1px;
	border: 0;
	clip: rect(0 0 0 0);
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute
}
.visual-picker input[type=checkbox]:checked~.visual-picker-figure, .visual-picker input[type=radio]:checked~.visual-picker-figure {
	box-shadow: inset 0 0 0 2px <?= $themeColor; ?>, 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.visual-picker input[type=checkbox]:checked~.visual-picker-figure:after, .visual-picker input[type=radio]:checked~.visual-picker-figure:after {
	opacity: 1
}
.visual-picker input[type=checkbox]:focus~.visual-picker-figure, .visual-picker input[type=radio]:focus~.visual-picker-figure {
	box-shadow: inset 0 0 0 2px <?= $themeColor; ?>, 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.visual-picker-figure {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 8rem;
	height: 8rem;
	color: #363642;
	background-color: #fff;
	border-radius: .25rem;
	cursor: pointer;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	transition: box-shadow .2s
}
.visual-picker-figure:after {
	font-family: Font Awesome\ 5 Free;
	content: "\f058";
	position: absolute;
	top: .5rem;
	right: .5rem;
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	display: inline-block;
	font-style: normal;
	font-weight: 900;
	font-size: 1rem;
	font-variant: normal;
	color: <?= $themeColor; ?>;
	text-rendering: auto;
	line-height: 1;
	opacity: 0;
	transition: opacity .2s
}
.visual-picker-content {
	display: block;
	padding: 0 .5rem;
	font-size: .75rem;
	text-align: center
}
.visual-picker-peek {
	position: absolute;
	left: 0;
	right: 0;
	display: block;
	text-align: center;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}
a.visual-picker {
	color: #363642
}
a.visual-picker:focus, a.visual-picker:hover {
	outline: 0;
	color: #363642;
	text-decoration: none
}
.publisher {
	display: flex;
	width: 100%
}
.publisher .publisher-label, .publisher .publisher-tools {
	display: none
}
.publisher.focus {
	display: flex;
	flex-direction: column
}
.publisher.focus .publisher-input, .publisher.focus .publisher-label, .publisher.focus .publisher-tools {
	display: block
}
.publisher.focus .publisher-input {
	margin-bottom: .5em;
	padding-right: 0;
	width: 100%
}
.publisher.focus .publisher-input .form-control {
	height: auto
}
.publisher .btn-link {
	color: #888c9b
}
.publisher .btn-link:focus, .publisher .btn-link:hover {
	color: #222230
}
.publisher .user-avatar {
	width: 2.25rem;
	height: 2.25rem
}

@media (min-width:768px) {
.publisher .user-avatar {
	width: 2.25rem;
	height: 2.25rem
}
}
.publisher-input {
	padding-right: 12px;
	width: 100%
}
.publisher-input .form-control {
	height: 2.25rem;
	resize: none
}

@media (min-width:768px) {
.publisher-input .form-control {
	height: 2.25rem
}
}
.publisher-actions {
	display: flex
}
.publisher-alt {
	border: 1px solid #c6c9d5;
	border-radius: .25rem;
	background-color: #fff
}
.publisher-alt .publisher-input {
	margin-bottom: 0;
	padding-right: 0
}
.publisher-alt .publisher-input .form-control {
	border: 0
}
.publisher-alt .publisher-input .form-control:focus {
	box-shadow: none
}
.publisher-alt .publisher-actions {
	display: none;
	padding: 0 .75rem 0 0;
	align-items: center
}
.publisher-alt .publisher-tools {
	padding: 0 .5em .75em
}
.publisher-alt.focus {
	border-color: <?= $themeColor; ?>;
	box-shadow: 0 0 0 1px <?= $themeColor; ?>
}
.publisher-alt.focus .publisher-input {
	margin-top: 0
}
.publisher-alt.focus .publisher-actions {
	display: flex
}
.timeline {
	margin: 0;
	padding: 0;
	display: block
}

@media (min-width:768px) {
.timeline {
	padding-right: 1rem;
	padding-left: 1rem
}
}
.timeline-heading {
	margin-top: .25rem;
	font-size: 1em
}
.timeline-heading .custom-control-inline {
	vertical-align: middle;
	margin-right: 0;
	margin-top: -4px
}

@media (min-width:768px) {
.timeline-heading .custom-control-inline {
	margin-top: 0
}
}
.timeline-item {
	position: relative;
	display: flex
}
.timeline-item:after {
	display: block;
	clear: both;
	content: ""
}
.timeline-item:first-child .timeline-body, .timeline-item:first-child .timeline-figure {
	padding-top: 0
}
.timeline-item:last-child .timeline-body, .timeline-item:last-child .timeline-figure {
	margin-bottom: 1.25rem
}
.timeline-figure {
	position: relative;
	padding: .5rem 0
}
.timeline-figure:before {
	content: "";
	position: absolute;
	display: block;
	height: 100%;
	top: 1rem;
	left: 50%;
	margin-left: -1px;
	border-left: 2px solid rgba(34,34,48,.1)
}
.timeline-dashed-line .timeline-figure:before {
	border-left-style: dashed
}
.timeline-figure .tile {
	position: relative;
	box-shadow: 0 0 0 2px #f6f7f9;
	z-index: 2
}
.timeline-fluid .timeline-figure {
	padding-top: .25rem;
	padding-bottom: .25rem
}
.timeline-fluid .timeline-figure:before {
	display: none
}
.timeline-body {
	width: 100%;
	margin-left: 1.25rem;
	padding: .5rem 0
}
.timeline-fluid .timeline-body {
	padding-top: .25rem;
	padding-bottom: .25rem
}
.timeline-date {
	font-size: .75rem;
	color: #888c9b
}
.conversations {
	position: relative;
	padding: 1rem
}
.conversation-list {
	margin-bottom: 0;
	padding-left: 0;
	display: flex;
	flex-direction: column;
	list-style: none
}
.conversation-list .log-divider {
	font-size: .75rem
}
.conversation-list>li:focus .conversation-actions, .conversation-list>li:hover .conversation-actions {
	opacity: 1
}
.conversation-inbound, .conversation-outbound {
	display: flex
}
.conversation-inbound:not(:first-child), .conversation-outbound:not(:first-child) {
	margin-top: 1rem
}
.conversation-inbound+.conversation-faux, .conversation-outbound+.conversation-faux {
	margin-top: .375rem
}
.conversation-avatar {
	z-index: 1
}
.conversation-avatar>.tile, .conversation-avatar>.user-avatar {
	box-shadow: 0 0 0 3px #fff
}
.conversation-inbound .conversation-message-skip-avatar {
	padding-left: 2rem
}
.conversation-inbound .conversation-message-skip-avatar .conversation-message-text {
	margin-left: 0;
	padding-left: .5rem
}
.conversation-inbound .conversation-avatar+.conversation-message .conversation-message-text {
	margin-left: -1rem;
	padding-left: 1.5rem
}
.conversation-inbound .conversation-message-text {
	color: #363642;
	background-color: #f6f7f9;
	border-radius: 0 1rem 1rem 1rem
}
.conversation-outbound {
	justify-content: flex-end
}
.conversation-outbound .conversation-message-skip-avatar {
	padding-right: 2rem
}
.conversation-outbound .conversation-message-skip-avatar .conversation-message-text {
	margin-right: 0;
	padding-right: .5rem
}
.conversation-outbound .conversation-avatar+.conversation-message .conversation-message-text {
	margin-right: -1rem;
	padding-right: 1.5rem
}
.conversation-outbound .conversation-message-text {
	color: #fff;
	background-color: <?= $themeColor; ?>;
	border-radius: 1rem 0 1rem 1rem
}
.conversation-outbound .conversation-message-text.has-attachment a:not(.btn) {
	color: #fff;
	opacity: .87
}
.conversation-outbound .conversation-message-text.has-attachment a:not(.btn):focus, .conversation-outbound .conversation-message-text.has-attachment a:not(.btn):hover {
	color: #fff;
	opacity: 1
}
.conversation-avatar .user-avatar-sm {
	margin-top: .375rem
}
.conversation-message {
	display: flex;
	flex-direction: column
}
.conversation-message .conversation-list {
	margin-top: 1rem
}
.conversation-message .card-figure {
	margin-bottom: 0;
	width: 15rem;
	max-width: 43%
}
.conversation-message-text {
	padding: .5rem;
	max-width: 480px;
	min-height: 2rem;
	overflow-wrap: break-word;
	word-wrap: break-word;
	word-break: break-word;
	box-shadow: 0 1px .5px rgba(20,20,31,.12)
}
.conversation-message-text.has-attachment .card-figure {
	width: 15rem;
	max-width: 100%
}
.conversation-message-text.has-attachment a:not(.btn) {
	text-decoration: underline
}
.conversation-message-text p {
	margin-bottom: .25em
}
.conversation-meta {
	margin-top: .125rem;
	padding-left: .5rem;
	font-size: .75rem;
	color: #888c9b
}
.conversation-actions {
	padding: 0 .25rem;
	align-self: flex-start;
	opacity: 0;
	transition: opacity .2s
}
.feed {
	margin-bottom: 1.25rem;
	display: flex;
	flex-direction: column;
	background-color: #fff;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	border-radius: .25rem
}
.feed>.feed-post .card-footer-item {
	flex: 0
}
.feed>.feed-comments, .feed>.feed-post {
	margin-bottom: 0;
	box-shadow: none
}
.feed>.feed-comments+.card, .feed>.feed-post+.card {
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.feed>.feed-comments .card-footer, .feed>.feed-post .card-footer {
	font-size: .875rem
}
.feed-publisher {
	margin-bottom: 20px;
	padding: 1rem;
	background-color: #fff;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}

@media (min-width:576px) {
.feed-publisher {
	border-radius: .25rem
}
}
.feed-publisher .form-control, .feed-publisher .form-control:focus, .feed-publisher .publisher, .feed-publisher .publisher-alt, .feed-publisher .publisher-alt.focus, .feed-publisher .publisher.focus {
	background-color: transparent;
	border-color: transparent;
	box-shadow: none
}
.feed-publisher .publisher-actions {
	padding: 0
}
.feed-post:first-child:not(:last-child) {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0
}
.feed-post .card-header {
	padding-right: 0;
	padding-left: 0;
	display: flex;
	justify-content: space-between;
	margin: 0 1rem
}
.feed-post .account-summary {
	align-self: flex-start
}
.feed-post .account-summary .account-name {
	font-size: 1rem;
	line-height: 1.5
}
.feed-attachments {
	margin-bottom: 1.25rem;
	display: flex;
	flex-wrap: nowrap;
	overflow-x: auto
}
.feed-attachments .card-figure {
	min-width: 300px;
	max-width: 43%
}
.feed-attachments .card-figure:not(:last-child) {
	margin-right: .5rem
}
.feed-summary {
	margin-bottom: 0;
	padding-left: 0;
	list-style: none;
	display: flex;
	align-items: center;
	font-size: .75rem
}
.feed-summary-item {
	color: #363642
}
.feed-summary-item:not(:last-child) {
	margin-right: .5rem
}
.feed-summary-item:focus, .feed-summary-item:hover {
	text-decoration: none
}
.feed-comments {
	border-top: 1px solid rgba(20,20,31,.12);
	border-top-left-radius: 0;
	border-top-right-radius: 0
}
.feed-comments .card-header {
	padding-top: .5rem;
	padding-bottom: .5rem;
	font-size: .75rem;
	font-weight: 400;
	border-bottom: 0
}
.feed-comments .conversation-message-text {
	padding-top: 0;
	padding-bottom: 0;
	max-width: 100%;
	min-height: auto;
	background-color: transparent;
	box-shadow: none
}
.feed-comments .conversation-message-text+.conversation-meta {
	margin-top: .5rem
}
.feed-comments .conversation-meta {
	font-size: inherit
}
.feed-comments .conversation-meta:first-child {
	margin-top: 0;
	margin-bottom: .5rem
}
.board {
	display: block;
	padding: 1.5rem 1rem;
	white-space: nowrap;
	overflow-x: scroll;
	height: calc(100vh - 7rem)
}
.page-expanded .board {
	height: calc(100vh - 3.5rem)
}

@media (min-width:992px) {
.board {
	padding-right: 2rem;
	padding-left: 2rem
}
}
.board-list {
	margin: 0;
	padding: 0;
	white-space: auto;
	overflow-x: visible
}
.board-list, .page-expanded .board-list {
	height: auto
}
.board-list .tasks {
	display: block;
	margin: 0;
	width: 100%;
	height: auto;
	max-width: 100%
}
.board-list .task-header {
	background-color: transparent;
	box-shadow: none
}

@media (min-width:576px) {
.board-list .task-issue>.card {
	flex-direction: row
}
.board-list .task-issue>.card>.card-header {
	width: 240px
}
.board-list .task-issue>.card>.card-footer {
	border-top: 0
}
}
.tasks {
	display: inline-flex;
	flex-direction: column;
	width: 20rem;
	height: 100%;
	vertical-align: top;
	background-color: #e6e8ed;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	border-radius: .25rem
}
.tasks:not(:last-child) {
	margin-right: 1.25rem
}
.tasks.hover {
	background-color: #d6d8e1
}
.tasks-action {
	display: inline-block;
	width: 18rem;
	padding: .5rem;
	vertical-align: top;
	background-color: #e6e8ed;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15);
	border-radius: .25rem
}
.tasks-action:not(:last-child) {
	margin-right: 1.25rem
}
.task-header {
	padding: .5rem .75rem 0;
	display: flex;
	align-items: center;
	font-weight: 600
}
.task-header .btn-reset {
	padding: .5rem
}
.task-title {
	margin: 0;
	font-size: 1rem
}
.task-body {
	padding: .5rem;
	min-height: 2rem;
	flex: 1;
	overflow-x: hidden;
	overflow-y: auto
}
.task-issue {
	border-radius: .25rem
}
.task-issue:not(:last-child) {
	margin-bottom: .5rem
}
.task-issue>.card {
	margin-bottom: 0
}
.task-issue>.card>.card-header {
	border: 0;
	white-space: normal
}
.task-issue>.card>.card-header>a {
	color: inherit
}
.task-issue>.card>.card-header>a:focus, .task-issue>.card>.card-header>a:hover {
	color: inherit;
	text-decoration: none
}
.task-label-group {
	margin: .125rem 0;
	display: block;
	line-height: 1;
	white-space: normal
}
.task-label {
	margin-right: .125rem;
	display: inline-block;
	width: 2rem;
	height: .5rem;
	border-radius: .5rem;
	background-color: <?= $themeColor; ?>
}
.metric-row {
	margin-bottom: 1.25rem;
	border-radius: .25rem;
	align-items: stretch;
	display: flex;
	flex-wrap: wrap;
	margin-right: -10px;
	margin-left: -10px
}
.metric-row .metric {
	margin: .5rem 0;
	min-height: 8.5rem
}
.metric-flush {
	margin: .5rem -1px .5rem 1px
}

@media (max-width:575.98px) {
.metric-flush {
	display: block
}
.metric-flush>.col, .metric-flush>[class="col-*"] {
	margin-top: -1px
}
}
.metric-flush .metric {
	margin: 0;
	border-radius: 0
}
.metric-flush>.col, .metric-flush>[class="col-*"] {
	margin-left: -1px;
	padding-right: 0;
	padding-left: 0
}
.metric-flush>.col:first-child>.metric, .metric-flush>[class="col-*"]:first-child>.metric {
	border-top-left-radius: .25rem;
	border-top-right-radius: .25rem
}
.metric-flush>.col:last-child>.metric, .metric-flush>[class="col-*"]:last-child>.metric {
	border-bottom-right-radius: .25rem;
	border-bottom-left-radius: .25rem
}

@media (min-width:576px) {
.metric-flush>.col:first-child>.metric, .metric-flush>[class="col-*"]:first-child>.metric {
	border-top-right-radius: 0;
	border-top-left-radius: .25rem;
	border-bottom-left-radius: .25rem
}
.metric-flush>.col:last-child>.metric, .metric-flush>[class="col-*"]:last-child>.metric {
	border-bottom-left-radius: 0;
	border-top-right-radius: .25rem;
	border-bottom-right-radius: .25rem
}
}
.metric {
	position: relative;
	padding: 1rem;
	display: flex;
	flex-direction: column;
	justify-content: center;
	flex-grow: 1;
	max-width: 100%;
	border-radius: .25rem;
	cursor: default
}

@media (min-width:576px) {
.metric {
	flex-basis: 0
}
}
.metric-hoverable, a.metric {
	color: inherit;
	outline: 0;
	cursor: pointer
}
.metric-hoverable:focus, .metric-hoverable:hover, a.metric:focus, a.metric:hover {
	color: inherit;
	text-decoration: none;
	border: 1px solid #d6d8e1
}
.metric-bordered {
	border: 1px solid #d6d8e1
}
.metric-label {
	font-size: .875rem;
	font-weight: 500;
	color: #888c9b;
	white-space: nowrap
}
.metric-label:first-child {
	margin-bottom: .5rem
}
.metric-label:last-child {
	margin-top: .5rem;
	margin-bottom: 0
}
.metric-value {
	margin-bottom: 0;
	line-height: 1;
	white-space: nowrap
}
.metric-value .value {
	vertical-align: middle
}
.metric-value>sub, .metric-value>sup {
	color: #a6abbd;
	font-size: .5em
}
.metric-value>sup {
	top: -.75em
}
.metric-value>sub {
	bottom: 0
}
.metric-badge {
	position: relative;
	top: -.5rem
}
.card-metric {
	text-align: center;
	background-color: #fff;
	border: none;
	border-radius: .25rem;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
.countdown {
	margin-bottom: 1rem;
	display: flex;
	flex-wrap: wrap;
	align-items: stretch;
	font-weight: 600
}

@media (max-width:575.98px) {
.countdown {
	font-size: 3rem;
	border-radius: .25rem
}
}
.countdown-item {
	padding: 1rem;
	display: flex;
	flex-basis: 0;
	flex-grow: 1;
	flex-shrink: 0;
	align-items: center;
	justify-content: center;
	flex-direction: column
}
.countdown-item>small {
	font-size: .875rem;
	line-height: .875rem;
	font-weight: inherit
}

@media (max-width:575.98px) {
.countdown-item {
	padding: 1rem;
	flex-basis: auto;
	width: 50%
}
}
.empty-state {
	display: flex;
	align-items: center;
	justify-content: center;
	padding-top: 40px;
	padding-bottom: 40px;
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed
}
.empty-state-fullpage {
	min-height: 100%
}
.empty-state-container {
	position: relative;
	padding: 0 1rem;
	max-width: 640px;
	text-align: center;
	z-index: 1
}
.state-figure {
	margin-bottom: 1.5rem;
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.state-header {
	margin-top: 0
}
.state-description, .state-header {
	margin-bottom: 1.25rem
}
.state-action {
	margin-bottom: .5rem
}
.invoice-wrapper {
	position: relative;
	padding: 1rem;
	width: 100%;
	background-color: #d6d8e1;
	overflow: hidden
}
.invoice-wrapper:before {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: inherit
}
.invoice-wrapper>.invoice-img {
	position: relative;
	display: block;
	margin-right: auto;
	margin-left: auto;
	width: 100%;
	cursor: not-allowed;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	z-index: 1;
	box-shadow: .5rem .5rem 1rem rgba(20,20,31,.05), .5rem -.5rem 1rem rgba(20,20,31,.05), -.5rem .5rem 1rem rgba(20,20,31,.05), -.5rem -.5rem 1rem rgba(20,20,31,.05)
}
.invoice-actions {
	position: absolute;
	top: 0;
	right: 0;
	padding: .5rem;
	opacity: .86;
	z-index: 2
}
.invoice-actions:hover {
	opacity: 1
}
.invoice {
	position: relative;
	display: flex;
	flex-direction: column;
	margin: auto;
	padding: 3rem 4rem;
	width: 768px;
	min-height: 1120px;
	background-color: #fff;
	z-index: -1
}
.invoice-header {
	margin-bottom: 3rem
}
.invoice-body>.table {
	margin-top: 3rem
}
.invoice-title {
	color: #363642;
	font-size: 1.125rem;
	font-weight: 500;
	caption-side: top
}
.invoice-footer {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	margin: 0 4rem;
	padding: 1rem 0;
	border-top: 1px solid rgba(34,34,48,.1)
}
.sticker {
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	z-index: 0
}
.sticker, .sticker-item {
	position: absolute
}
.sticker-soft {
	opacity: .54
}
.sticker-soften {
	opacity: .12
}
.sticker-middle {
	top: 50%;
	left: 50%;
	transform: translate3d(-50%, -50%, 0)
}
.sticker-middle-right {
	top: 50%;
	right: 0;
	transform: translate3d(0, -50%, 0);
	transform-origin: right center
}
.sticker-middle-left {
	top: 50%;
	left: 0;
	transform: translate3d(0, -50%, 0);
	transform-origin: left center
}
.sticker-top-right {
	top: 0;
	right: 0;
	transform-origin: right top
}
.sticker-top-center {
	top: 0;
	left: 50%;
	transform: translate3d(-50%, 0, 0);
	transform-origin: center top
}
.sticker-top-left {
	top: 0;
	left: 0;
	transform-origin: left top
}
.sticker-bottom-center {
	bottom: 0;
	left: 50%;
	transform: translate3d(-50%, 0, 0);
	transform-origin: center bottom
}
.sticker-bottom-left {
	bottom: 0;
	left: 0;
	transform-origin: left bottom
}
.sticker-bottom-right {
	bottom: 0;
	right: 0;
	transform-origin: right bottom
}
.auth {
	position: relative;
	display: flex;
	flex-direction: column;
	align-items: center;
	min-height: 100%;
	background-image: url("<?= $themeFolder; ?>/images/bg.jpg");
	background-size: cover;
	
}
.auth-header {
	position: relative;
	padding: 2rem 1.25rem 0;
	width: 100%;
	background-color: transparent;
	color: #fff;
	text-align: center;
	background-size: cover;
}

@media (min-width:768px) {
.auth-header {
	margin-bottom: -3rem;
	padding-top: 6rem;
	padding-bottom: 3rem
}
.auth-header .container {
	padding: 0;
	max-width: 420px
}
}
.auth-header a {
	color: #f7c46c;
	text-decoration: underline
}
.auth-header a:focus, .auth-header a:hover {
	color: #d3a860
}
.auth-header canvas {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	pointer-events: none
}
.auth-form {
	position: relative;
	padding: 2rem 1.25rem 0;
	width: 100%;
	z-index: 1
}

@media (min-width:768px) {
.auth-form {
	padding: 3rem 2rem 1rem;
	max-width: 420px;
	border-radius: .25rem;
	background-color: #fff;
	box-shadow: 0 0 0 1px rgba(20,20,31,.05), 0 1px 3px 0 rgba(20,20,31,.15)
}
}
.auth-form-reflow {
	padding: 2rem 1rem 0;
	background-color: transparent;
	border-radius: 0;
	box-shadow: none
}
.auth-form .link {
	text-decoration: underline
}
.auth-floated {
	flex-direction: row;
	align-items: stretch
}
.auth-floated .auth-form {
	max-width: 100%;
	border-radius: 0;
	padding-top: 2rem;
	text-align: center;
	z-index: 2
}

@media (min-width:992px) {
.auth-floated .auth-form {
	max-width: 33.333333%
}
}
.auth-floated .auth-announcement {
	display: none;
	padding: 6rem 3rem;
	flex: 1;
	text-align: center;
	color: #fff;
	background-color: <?= $themeColor; ?>;
	background-size: cover
}

@media (min-width:992px) {
.auth-floated .auth-announcement {
	display: block
}
}
.auth-floated .announcement-title {
	font-size: 1.5rem;
	margin-bottom: 1.5rem
}
.auth-floated .announcement-body {
	position: relative;
	z-index: 2
}
.auth-footer {
	padding: 1rem;
	color: #888c9b
}

@media (min-width:768px) {
.auth-footer {
	max-width: 420px
}
}
.list-group-messages.list-group-bordered .list-group-item {
	border-color: rgba(34,34,48,.075)
}
.list-group-messages .list-group-item {
	padding-top: 1.25rem;
	padding-bottom: 1.25rem;
	background-color: transparent
}
.list-group-messages .list-group-item-body, .list-group-messages .list-group-item-figure {
	align-self: flex-start
}
.list-group-messages .unread .list-group-item-subtitle, .list-group-messages .unread .list-group-item-title {
	font-weight: 600
}
.list-group-messages .read .list-group-item-subtitle, .list-group-messages .read .list-group-item-title {
	color: #888c9b
}
.message {
	display: flex;
	flex-direction: column;
	height: 100%
}
.message-header {
	position: relative;
	padding: .5rem .5rem .5rem .25rem;
	display: flex;
	align-items: center;
	height: 3.5rem;
	background-color: #fff;
	box-shadow: 0 1px 0 0 rgba(20,20,31,.075);
	z-index: 5
}

@media (min-width:768px) {
.message-header {
	padding: .5rem
}
}
.message-header-actions {
	margin-left: auto;
	min-width: 92px;
	text-align: right
}
.message-title {
	margin: 0 .5rem;
	font-size: 1rem;
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden
}
.message-body {
	padding: 0;
	flex: 1;
	overflow-y: auto
}

@media (min-width:576px) {
.message-body {
	padding: 1.5rem 1rem
}
}

@media (min-width:992px) {
.message-body {
	padding-right: 2rem;
	padding-left: 2rem
}
}
.message-publisher {
	position: relative;
	padding: .5rem;
	background-color: #fff;
	box-shadow: 0 -1px 0 0 rgba(20,20,31,.075);
	z-index: 1
}
.message-publisher .input-group {
	border: 0;
	background-color: transparent;
	box-shadow: none
}
.message-publisher .input-group.focus {
	box-shadow: none
}
</style>