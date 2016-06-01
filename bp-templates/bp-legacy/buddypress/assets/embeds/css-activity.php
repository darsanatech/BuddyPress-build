#bp-embed-header:after {
	clear: both;
	content: "";
	display: table;
	margin-bottom: 1em;
}

.bp-embed-avatar {
	float: left;
	margin: 0 .75em 0 0;
}

p.bp-embed-activity-action {
	font-size: 15px;
	margin-bottom: 0;
}

p.bp-embed-activity-action a:first-child {
	color: #32373c;
	font-weight: bold;
}

p.bp-embed-activity-action img.avatar {
	padding: 0 4px 0 3px;
	vertical-align: text-bottom;
}

.bp-embed-excerpt {
	margin-bottom: 1em;
}

.bp-embed-excerpt a {
	color: #21759b;
	display: inline-block;
	overflow: hidden;
	text-overflow: ellipsis;
	vertical-align: top;
	white-space: nowrap;
	max-width: 250px;
}

.activity-read-more {
	margin-left: .5em;
}

.activity-read-more a {
	color: #b4b9be;
}

.wp-embed-footer {
	margin-top: 20px;
}

span.bp-embed-timestamp {
	font-size: .9em;
}

video {
	width: 100%;
	height: auto;
}

.bp-activity-embed-display-media {
	border: 1px solid #ccc;
	border-radius: 6px;
}

.bp-activity-embed-display-media.one-col,
.bp-activity-embed-display-media.one-col .thumb,
.bp-activity-embed-display-media.one-col .thumb img {
	width: 100%;
}

.bp-activity-embed-display-media.two-col .thumb,
.bp-activity-embed-display-media.two-col .caption {
	display: table-cell;
}

.bp-activity-embed-display-media.two-col .thumb {
	background: #000;
	vertical-align: middle;
}

.bp-activity-embed-display-media.two-col .caption {
	vertical-align: top;
}

.bp-activity-embed-display-media.two-col .thumb img {
	border-right: 1px solid #ccc;
	display: block;
	width: 100%;
}

.bp-activity-embed-display-media .thumb {
	position: relative;
}

.bp-activity-embed-display-media .caption {
	padding: .2em .5em .5em .5em;
}

a.play-btn {
	background: rgba(0, 0, 0, 0.75);
	border-radius: 50%;
	height: 50px;
	left: 50%;
	margin: 0;
	padding: 1em;
	position: absolute;
	text-indent: 0.25em;
	top: 50%;
	transform: translateY(-50%) translateX(-50%);
	-webkit-transform: translateY(-50%) translateX(-50%);
	transition: all 0.2s ease-out;
	width: 50px;
}

.bp-activity-embed-display-media.two-col a.play-btn {
	height: 35px;
	width: 35px;
}

a.play-btn:hover {
	background: rgba(0, 0, 0, 0.95);
	transform: translateY(-50%) translateX(-50%) scale(1.05);
	-webkit-transform: translateY(-50%) translateX(-50%) scale(1.05);
	transition: all 0.2s ease-out;
}

.bp-activity-embed-display-media .thumb svg {
	fill: #fff;
	overflow: hidden;
}

.bp-activity-embed-display-media .caption-description {
	font-size: 90%;
	margin: .4em 0;
}

@media only screen and (max-width: 480px) {
	.bp-activity-embed-display-media.two-col .thumb {
		border-bottom: 1px solid #ccc;
		border-right: 0;
		display: block;
		max-width: none !important;
	}

	a.play-btn {
		height: 35px;
		width: 35px;
	}
}