"use strict";(globalThis.webpackChunkwp_event_solution=globalThis.webpackChunkwp_event_solution||[]).push([[1046],{40728(e,t,n){n.d(t,{A:()=>p});var a=n(51609),i=n(27723),r=n(50400),o=n(89500),l=n(36492),d=n(99150),c=n(72121),s=n(99489);const p=({total:e=0,currentPage:t=1,pageSize:n=10,onPageChange:p,onPageSizeChange:g,pageSizeOptions:m=["1","2","10","20","50","100"],wrapperClassName:f="eventin-pagination-wrapper"})=>{const x=0===e?0:(t-1)*n+1,h=Math.min(t*n,e),u=e=>{p&&p(e)};return(0,a.createElement)(s.C,{className:f},(0,a.createElement)("div",{className:"pagination-left"},(0,a.createElement)("span",{className:"rows-per-page-label"},(0,i.__)("Rows per page:","eventin")),(0,a.createElement)(l.A,{value:n.toString(),onChange:e=>{g&&g(e)},options:m.map(e=>({value:e,label:e})),size:"middle"})),(0,a.createElement)("div",{className:"pagination-right"},(0,a.createElement)("span",{className:"pagination-info"},x,"-",h," ",(0,i.__)("of","eventin")," ",e),(0,a.createElement)(o.A,{current:t,total:e,pageSize:n,onChange:u,showSizeChanger:!1,showQuickJumper:!1,showTotal:!1,prevIcon:(0,a.createElement)(r.Ay,{icon:(0,a.createElement)(d.A,null),iconPosition:"start",variant:"outlined",onClick:()=>u(t-1),disabled:1===t,style:{height:"100%"}},(0,i.__)("Previous","eventin")),nextIcon:(0,a.createElement)(r.Ay,{icon:(0,a.createElement)(c.A,null),iconPosition:"start",variant:"outlined",onClick:()=>u(t+1),disabled:t===e,style:{height:"100%"}},(0,i.__)("Next","eventin")),simple:!1})))}},99489(e,t,n){n.d(t,{C:()=>a});const a=n(69815).default.div`
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 16px;

	.pagination-left {
		display: flex;
		align-items: center;
		gap: 8px;
		color: #71717a;
		font-size: 14px;

		.rows-per-page-label {
			white-space: nowrap;
			font-weight: 400;
		}

		.ant-select {
			min-width: 70px;

			.ant-select-selector {
				border-color: #e4e4e7;
				border-radius: 6px;
			}
		}
	}

	.pagination-right {
		display: flex;
		align-items: center;
		gap: 24px;

		.pagination-info {
			color: #71717a;
			font-size: 14px;
			font-weight: 400;
		}

		.ant-pagination {
			display: flex;
			align-items: center;
			gap: 8px !important;
			margin: 0;

			li {
				margin-inline: 0px !important;
			}

			.ant-pagination-prev,
			.ant-pagination-next {
				min-width: auto;
				height: 36px;
				color: #4b4b4b;
				font-size: 14px;
				font-weight: 500;
				.ant-pagination-item-link {
					border: 1px solid #d4d4d8;
					border-radius: 4px;
					background-color: transparent;
					display: flex;
					align-items: center;
					justify-content: center;
					color: #71717a;
					font-size: 13px;
					padding: 0 12px;
					height: 36px;
					font-weight: 400;

					&:hover {
						border-color: #a1a1aa;
						color: #52525b;
						background-color: transparent;
					}
				}

				&.ant-pagination-disabled {
					.ant-pagination-item-link {
						border-color: #e4e4e7;
						color: #d4d4d8;
						background-color: transparent;
						cursor: not-allowed;

						&:hover {
							border-color: #e4e4e7;
							color: #d4d4d8;
							background-color: transparent;
						}
					}
				}
			}

			.ant-pagination-item {
				border: 1px solid #d9dde3;
				border-radius: 4px;
				min-width: 36px;
				height: 36px;
				display: flex;
				align-items: center;
				justify-content: center;
				font-size: 13px;
				background-color: white;
				line-height: 34px;

				a {
					color: #71717a;
					font-weight: 400;
				}

				&:hover {
					border-color: #f2e8ff;
					background-color: #f2e8ff;

					a {
						color: #52525b;
					}
				}

				&.ant-pagination-item-active {
					background-color: #f2e8ff;
					border-color: #f2e8ff;

					a {
						color: #18181b;
						font-weight: 500;
					}

					&:hover {
						background-color: #f2e8ff;
						border-color: #f2e8ff;

						a {
							color: #18181b;
						}
					}
				}
			}
		}
	}

	@media ( max-width: 768px ) {
		flex-direction: column;
		gap: 16px;
		align-items: flex-start;

		.pagination-right {
			width: 100%;
			flex-direction: column;
			align-items: flex-start;
			gap: 12px;
		}
	}
`},34388(e,t,n){n.d(t,{i:()=>l});var a=n(51609),i=n(27723),r=n(54725),o=n(48842);const l=e=>[{key:"json",label:(0,a.createElement)(o.A,{style:{padding:"4px 0",fontSize:"14px",marginLeft:"6px"}},(0,i.__)("Export JSON Format","eventin")),icon:(0,a.createElement)(r.JsonFileIcon,null),onClick:()=>e("json")},{key:"csv",label:(0,a.createElement)(o.A,{style:{padding:"4px 0",fontSize:"14px",marginLeft:"6px"}},(0,i.__)("Export CSV Format","eventin")),icon:(0,a.createElement)(r.CsvFileIcon,null),onClick:()=>e("csv")}]},64464(e,t,n){n.d(t,{A:()=>p});var a=n(51609),i=n(11721),r=n(32099),o=n(7638),l=n(54725),d=n(27723),c=n(50620),s=n(34388);const p=({type:e,arrayOfIds:t,shouldShow:n,eventId:p,isSelectingItems:g})=>{const{isDownloading:m,handleExport:f}=(0,c.i)({type:e,arrayOfIds:t,eventId:p}),x={display:"flex",alignItems:"center",borderColor:"#d9d9d9",fontSize:"14px",fontWeight:400,color:"#64748B",height:"36px",padding:"10px",borderTopRightRadius:g?"4px":"0px",borderBottomRightRadius:g?"4px":"0px"};return(0,a.createElement)(r.A,{title:n?(0,d.__)("Upgrade to Pro","eventin"):(0,d.__)("Download table data","eventin")},n?(0,a.createElement)(o.Ay,{variant:o.Vt,onClick:()=>window.open("https://themewinter.com/eventin/pricing/","_blank"),sx:x},(0,a.createElement)(l.ExportIcon,{width:16,height:16}),(0,a.createElement)(l.ProFlagIcon,null)):(0,a.createElement)(i.A,{menu:{items:(0,s.i)(f)},placement:"bottomRight",arrow:!0,disabled:n},(0,a.createElement)(o.Ay,{variant:o.Vt,loading:m,sx:x},(0,a.createElement)(l.ExportIcon,{width:16,height:16}))))}},60254(e,t,n){n.d(t,{R:()=>r});var a=n(1455),i=n.n(a);const r=async({type:e,format:t,ids:n=[],eventId:a})=>{let r=`/eventin/v2/${e}/export`;a&&(r+=`?event_id=${a}`);const o=await i()({path:r,method:"POST",data:{format:t,ids:n},parse:"csv"!==t});return"csv"===t?o.text():o}},50620(e,t,n){n.d(t,{i:()=>d});var a=n(86087),i=n(52619),r=n(27723),o=n(60254),l=n(96781);const d=({type:e,arrayOfIds:t,eventId:n})=>{const[d,c]=(0,a.useState)(!1);return{isDownloading:d,handleExport:async a=>{try{c(!0);const d=await(0,o.R)({type:e,format:a,ids:t,eventId:n});"json"===a&&(0,l.P)(JSON.stringify(d,null,2),`${e}.json`,"application/json"),"csv"===a&&(0,l.P)(d,`${e}.csv`,"text/csv"),(0,i.doAction)("eventin_notification",{type:"success",message:(0,r.__)("Exported successfully","eventin")})}catch(e){console.error(e),(0,i.doAction)("eventin_notification",{type:"error",message:e?.message||(0,r.__)("Export failed","eventin")})}finally{c(!1)}}}}},96781(e,t,n){n.d(t,{P:()=>a});const a=(e,t,n)=>{const a=new Blob([e],{type:n}),i=URL.createObjectURL(a),r=document.createElement("a");r.href=i,r.download=t,r.click(),URL.revokeObjectURL(i)}},84174(e,t,n){n.d(t,{A:()=>x});var a=n(51609),i=n(1455),r=n.n(i),o=n(86087),l=n(52619),d=n(27723),c=n(32099),s=n(81029),p=n(7638),g=n(500),m=n(54725);const{Dragger:f}=s.A,x=e=>{const{type:t,paramsKey:n,shouldShow:i,revalidateList:s}=e||{},[x,h]=(0,o.useState)([]),[u,v]=(0,o.useState)(!1),[b,w]=(0,o.useState)(!1),y=()=>{w(!1)},k=`/eventin/v2/${t}/import`,E=(0,o.useCallback)(async e=>{try{v(!0);const t=await r()({path:k,method:"POST",body:e});return(0,l.doAction)("eventin_notification",{type:"success",message:(0,d.__)(` ${t?.message} `,"eventin")}),s(!0),h([]),v(!1),y(),t?.data||""}catch(e){throw v(!1),(0,l.doAction)("eventin_notification",{type:"error",message:e.message}),console.error("API Error:",e),e}},[t]),_={name:"file",accept:".json, .csv",multiple:!1,maxCount:1,onRemove:e=>{const t=x.indexOf(e),n=x.slice();n.splice(t,1),h(n)},beforeUpload:e=>(h([e]),!1),fileList:x},A=i?()=>window.open("https://themewinter.com/eventin/pricing/","_blank"):()=>w(!0);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(c.A,{title:i?(0,d.__)("Upgrade to Pro","eventin"):(0,d.__)("Import data","eventin")},(0,a.createElement)(p.Ay,{className:"etn-import-btn eventin-import-button",variant:p.Vt,sx:{display:"flex",alignItems:"center",borderColor:"#d9d9d9",fontSize:"14px",fontWeight:400,color:"#64748B",height:"36px",padding:"10px",borderTopLeftRadius:"0px",borderBottomLeftRadius:"0px"},onClick:A},(0,a.createElement)(m.ImportIcon,{width:16,height:16}),i&&(0,a.createElement)(m.ProFlagIcon,null))),(0,a.createElement)(g.A,{title:(0,d.__)("Import file","eventin"),open:b,onCancel:y,maskClosable:!1,footer:null,centered:!0,destroyOnHidden:!0,wrapClassName:"etn-import-modal-wrap",className:"etn-import-modal-container eventin-import-modal-container"},(0,a.createElement)("div",{className:"etn-import-file eventin-import-file-container",style:{marginTop:"25px"}},(0,a.createElement)(f,{..._},(0,a.createElement)("p",{className:"ant-upload-drag-icon"},(0,a.createElement)(m.UploadCloudIcon,{width:"50",height:"50"})),(0,a.createElement)("p",{className:"ant-upload-text"},(0,d.__)("Click or drag file to this area to upload","eventin")),(0,a.createElement)("p",{className:"ant-upload-hint"},(0,d.__)("Choose a JSON or CSV file to import","eventin")),0!=x.length&&(0,a.createElement)(p.Ay,{onClick:async e=>{e.preventDefault(),e.stopPropagation();const t=new FormData;t.append(n,x[0],x[0].name),await E(t)},disabled:0===x.length,loading:u,variant:p.zB,className:"eventin-start-import-button"},u?(0,d.__)("Importing","eventin"):(0,d.__)("Start Import","eventin"))))))}},37486(e,t,n){n.d(t,{W:()=>c});var a=n(51609),i=n(69815),r=n(92911),o=n(47152);const l=i.default.div`
	border-radius: 6px;
	background-color: white;
	border: 1px solid #d9dde3;
	display: flex;
	flex-direction: column;
	margin-bottom: 20px;
	.eventin-filter-header {
		padding: 16px;

		@media ( max-width: 576px ) {
			padding: 10px;
		}

		.eventin-filter-button {
			font-size: 14px;
			color: #e4e4e7;
			font-weight: normal;
			line-height: 0px;
			border-radius: 8px;
		}
	}

	.ant-select-selector {
		border-radius: 8px;
	}
`,d=(0,i.default)(o.A)`
	border-top: 1px solid #ebeef5;
	padding: ${({isFiltered:e})=>e?"12px 20px":"0 20px"};
	align-items: center;

	max-height: ${({isFiltered:e})=>e?"200px":"0"};
	opacity: ${({isFiltered:e})=>e?1:0};
	transform: ${({isFiltered:e})=>e?"translateY(0)":"translateY(-6px)"};
	overflow: hidden;
	transition:
		max-height 0.3s ease,
		opacity 0.3s ease,
		transform 0.3s ease,
		padding 0.3s ease;
`,c=({isFiltered:e,filteredTopMenu:t,filteredOptions:n})=>(0,a.createElement)(l,null,(0,a.createElement)(r.A,{justify:"space-between",align:"center",className:"eventin-filter-header",wrap:!0,gap:16},t),(0,a.createElement)(d,{gutter:[16,16],isFiltered:e},n))},95998(e,t,n){n.d(t,{A:()=>x});var a=n(51609),i=n(11721),r=n(92911),o=n(47767),l=n(52619),d=n(56427),c=n(27723),s=n(7638),p=n(18062),g=n(27154),m=n(54725),f=n(97455);function x(e){const{title:t,buttonText:n,onClickCallback:x}=e,{evnetin_ai_active:h,evnetin_pro_active:u}=window?.eventin_ai_local_data||{},v=window?.localized_multivendor_data?.is_vendor||!1,b=(0,o.useNavigate)(),{pathname:w}=(0,o.useLocation)(),{doAction:y}=wp.hooks,k=["/events"!==w&&{key:"0",label:(0,c.__)("Event List","eventin"),icon:(0,a.createElement)(m.EventListIcon,{width:20,height:20}),onClick:()=>{b("/events")}},"/events/categories"!==w&&{key:"1",label:(0,c.__)("Event Categories","eventin"),icon:(0,a.createElement)(m.CategoriesIcon,null),onClick:()=>{b("/events/categories")}},"/events/tags"!==w&&{key:"2",label:(0,c.__)("Event Tags","eventin"),icon:(0,a.createElement)(m.TagIcon,null),onClick:()=>{b("/events/tags")}}],E=(0,l.applyFilters)("eventin-ai-create-event-modal","eventin-ai");return(0,a.createElement)(d.Fill,{name:g.PRIMARY_HEADER_NAME},(0,a.createElement)(r.A,{justify:"space-between",align:"center",wrap:"wrap",gap:20},(0,a.createElement)(p.A,{title:t}),(0,a.createElement)("div",{style:{display:"flex",alignItems:"center",gap:"8px",flexWrap:"wrap"}},!v&&(0,a.createElement)(f.WO,{onClick:()=>{y(h&&u?"eventin-ai-create-event-modal-visible":"eventin-ai-text-generator-modal",{visible:!0})}},(0,a.createElement)(m.AIGenerateIcon,null),(0,a.createElement)(f.oY,null,(0,c.__)("Event with AI","eventin"))),(0,a.createElement)(s.Ay,{variant:s.zB,htmlType:"button",onClick:x,sx:{display:"flex",alignItems:"center"}},(0,a.createElement)(m.PlusOutlined,null),n),(0,a.createElement)(r.A,{gap:12},(0,a.createElement)(i.A,{menu:{items:k},trigger:["click"],placement:"bottomRight",overlayClassName:"action-dropdown"},(0,a.createElement)(s.Ay,{variant:s.Vt,sx:{color:"#8C8C8C",height:"40px",lineHeight:"1",borderColor:"#747474",padding:"0px 10px",fontSize:"14px",fontWeight:400}},(0,a.createElement)(m.MoreIconOutlined,null)))))),(0,a.createElement)(E,{navigate:b,pathname:w}))}},49111(e,t,n){n.d(t,{B0:()=>b,HJ:()=>y,IL:()=>g,OI:()=>u,Us:()=>k,Wd:()=>s,XN:()=>m,_q:()=>c,cL:()=>d,eO:()=>v,eU:()=>p,iU:()=>h,s0:()=>f,ve:()=>w,xI:()=>x});var a=n(7638),i=n(69815),r=n(54861),o=n(36492);const{RangePicker:l}=r.A,d=(0,i.default)(o.A)`
	.ant-select-selector {
		height: 36px !important;
		border-radius: 4px;
		border: 1px solid #e5e7eb;
		background-color: #fff;
		color: #334155;
		font-size: 14px;
		width: 120px !important;
	}
`,c=((0,i.default)(l)`
	.ant-picker-range {
		height: 36px !important;
		border-radius: 4px !important;
	}
`,i.default.div`
	display: flex;
	gap: 12px;
	align-items: center;
	.event-thumbnail {
		width: 80px;
		height: 64px;
		border-radius: 4px;
		overflow: hidden;
		flex-shrink: 0;
		background-color: #f0f0f0;

		.event-thumbnail-image {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	}
	.event-details {
		.event-title {
			color: #202223;
			font-size: 14px;
			font-weight: 500;
			line-height: 20px;
			display: inline-block;
			margin-bottom: 6px;
			text-decoration: none;
		}
		.event-location {
			color: #6d6d6d;
			font-weight: 400;
			margin: 0;
		}
		.event-date-time-badges {
			display: flex;
			align-items: center;
			gap: 4px;
			flex-wrap: wrap;
			font-size: 13px;
			color: #6d6d6d;
			.event-type {
				background-color: #e6f4ff;
				color: #0958d9;
				padding: 2px 8px;
				border-radius: 4px;
				font-size: 12px;
				font-weight: 500;
			}
			.recurring-badge {
				background-color: #e6f4ff;
				color: #0958d9;
				padding: 2px 8px;
				border-radius: 50px;
				font-size: 12px;
				font-weight: 500;
				margin-inline: 10px;
				display: flex;
				gap: 4px;
				cursor: pointer;
			}
		}
	}
`),s=i.default.span`
	font-size: 14px;
	font-weight: 500;
	color: #202223;
`,p=i.default.span`
	background-color: ${e=>e.background};
	color: ${e=>e.text};
	border-radius: 50px;
	padding: 6px 16px;
	min-width: 80px;
	text-align: center;
	font-weight: 500;
	font-size: 12px;
	line-height: 18px;
	text-transform: capitalize;
	white-space: nowrap;
	transition: all 0.2s ease;
`,g=i.default.div`
	background-color: #fff;
	border-radius: 12px;
	padding: 20px;
	margin: 0 auto;
	min-height: 500px;
	@media ( max-width: 900px ) {
		max-width: 100%;
		padding: 16px;
	}

	@media ( max-width: 600px ) {
		padding: 10px;
	}

	.ant-picker-calendar {
		max-width: 1440px;
		margin: 0 auto;

		@media ( max-width: 1200px ) {
			max-width: 100%;
		}

		@media ( max-width: 900px ) {
			max-width: 100%;
		}

		@media ( max-width: 600px ) {
			max-width: 100%;
		}

		.ant-picker-panel {
			border-top: none;
		}

		.ant-picker-calendar-header {
			display: none;
		}

		.ant-picker-calendar-date {
			border-top: none;
		}

		.ant-picker-content {
			thead {
				background-color: #f3f4f6;
				tr {
					&:hover {
						background-color: transparent !important;
					}
				}
				th {
					color: #64748b;
					font-weight: 500;
					font-size: 12px;
					text-transform: uppercase;
					text-align: center;
					padding: 10px 0 !important;
					border: 1px solid #e5e7eb;
					border-bottom: none;
				}
			}

			tbody tr {
				&:hover {
					background: transparent !important;
				}
			}
		}

		.ant-picker-cell {
			padding: 0;
			border: 1px solid #f0f0f0;
			vertical-align: top;

			&.ant-picker-calendar-date-today {
				&:hover {
					background: #f7f0ff !important;
				}
			}
		}

		.ant-picker-cell-in-view {
			.ant-picker-cell-inner {
				color: #334155;
			}
		}

		.ant-picker-cell-disabled {
			.ant-picker-cell-inner {
				color: #94a3b8;
			}
		}

		.ant-picker-cell-selected {
			.ant-picker-cell-inner {
				background: transparent;
			}
		}

		.ant-picker-cell-today {
			background-color: white;
			padding: 10px !important;

			.ant-picker-calendar-date-today {
				background-color: #6c1bea !important;
				width: 24px;
				height: 24px;
				font-size: 14px;
				border-radius: 100px;
				display: flex;
				align-items: center;
				justify-content: center;

				.ant-picker-calendar-date-value {
					color: white !important;
				}
			}
			.ant-picker-cell-inner::before {
				border: none;
			}

			.ant-picker-cell-inner {
				&::after {
					display: none;
				}
			}
		}

		.ant-picker-cell-inner {
			padding: 8px;
			height: 120px;
			background: transparent;
			border-radius: 0;
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			position: relative;
			margin: 0 !important;

			.ant-picker-calendar-date-content {
				width: 100%;
				&::-webkit-scrollbar {
					display: none;
				}

				&::-webkit-scrollbar {
					width: 3px;
					padding-inline: 2px;
				}
				@media ( max-width: 576px ) {
					&::-webkit-scrollbar {
						display: none;
					}
				}
				&::-webkit-scrollbar-track {
					background: #f7f0ff;
				}
				&::-webkit-scrollbar-thumb {
					background: lightgray;
					/* background: #d9d9d9; */
				}
			}
		}
	}
`,m=i.default.div`
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 0 0 20px 0;
	margin-bottom: 16px;
	max-width: 1440px;
	margin: 0 auto;

	@media ( max-width: 1200px ) {
		max-width: 100%;
		padding: 0 0 18px 0;
	}

	@media ( max-width: 900px ) {
		padding: 0 0 16px 0;
		margin-bottom: 12px;
	}

	@media ( max-width: 600px ) {
		padding: 0 0 12px 0;
		margin-bottom: 10px;
	}
`,f=i.default.h2`
	font-size: 18px;
	font-weight: 600;
	color: #334155;
	margin: 0;
`,x=i.default.div`
	display: flex;
	gap: 8px;
	align-items: center;
`,h=i.default.button`
	display: flex;
	align-items: center;
	justify-content: center;
	width: 32px;
	height: 32px;
	border: 1px solid #d9d9d9;
	background: #fff;
	border-radius: 4px;
	cursor: pointer;
	transition: all 0.2s ease;
	color: #64748b;
	padding: 0;

	&:hover {
		border-color: #6b2ee5;
		color: #6b2ee5;
		background: #f5f0ff;
	}

	&:active {
		transform: scale( 0.95 );
	}

	svg {
		width: 16px;
		height: 16px;
	}
`,u=i.default.div`
	border-radius: 4px;
	display: flex;
	flex-direction: column;
	gap: 4px;
	width: 100%;

	.etn-render-cell-item {
		background: #f0f0f0;
		padding: 4px 2px;
		border-radius: 4px;
		margin-bottom: 4px;
		.etn-render-cell-item-title {
			font-size: 14px;
			font-weight: 500;
			color: #202223;
			margin: 0;
			text-transform: capitalize;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			max-width: 86px;
			min-width: 60px;
			width: 100%;
		}
		.etn-render-cell-item-time {
			font-size: 12px;
			font-weight: 400;
			color: #6d6d6d;
			margin: 0;
			white-space: nowrap;
		}
	}
`,v=i.default.h4`
	font-size: 14px;
	font-weight: 500;
	color: #202223;
	margin: 0;
`,b=i.default.p`
	font-size: 14px;
	font-weight: 400;
	color: #6d6d6d;
	margin: 0;
`,w=(0,i.default)(a.Ay)`
	background: #f7f7f7;
`,y=(0,i.default)(l)`
	height: 36px;
	border-radius: 4px;
`,k=i.default.span`
	&.recurring-badge {
		background-color: #e6f4ff;
		color: #0958d9;
		padding: 2px 8px;
		border-radius: 50px;
		font-size: 12px;
		font-weight: 500;
		margin-inline: 10px;
		display: flex;
		gap: 4px;
		cursor: pointer;
		margin-left: 10px;
	}
`},97455(e,t,n){n.d(t,{WO:()=>r,ff:()=>i,oY:()=>o});var a=n(69815);const i=a.default.div`
	background-color: #f4f6fa;
	padding: 12px 32px;
	min-height: 100vh;

	@media ( max-width: 576px ) {
		padding: 10px 8px;
	}

	.ant-table-wrapper {
		padding: 15px 20px;
		background-color: #fff;
		border-radius: 12px;

		@media ( max-width: 576px ) {
			padding: 8px 10px;
		}
	}

	.event-list-wrapper {
		border-radius: 0 0 12px 12px;
	}

	.ant-table-thead {
		> tr {
			> th {
				background-color: #fff;
				padding-top: 10px;
				font-weight: 400;
				color: #7a7a99;
				font-size: 16px;
				&:before {
					display: none;
				}
			}
		}
	}

	tr {
		&:hover {
			background-color: #f8fafc !important;
		}
	}

	.event-title {
		color: #262626;
		font-size: 16px;
		font-weight: 600;
		line-height: 26px;
		display: inline-flex;
		margin-bottom: 6px;
	}

	.event-location,
	.event-date-time {
		color: #334155;
		font-weight: 400;
		margin: 0;
		line-height: 1.4;
		font-size: 14px;
	}
	.event-date-time {
		display: flex;
		align-items: center;
		gap: 4px;
	}

	.event-location {
		margin-bottom: 4px;
	}

	.event-actions,
	.etn-table-actions {
		.ant-btn {
			padding: 0;
			width: 28px;
			height: 28px;
			line-height: 1;
			display: flex;
			justify-content: center;
			align-items: center;
			border-color: #94a3b8;
			color: #525266;
			background-color: #f5f5f5;
		}
	}

	.ant-tag {
		border-radius: 20px;
		font-size: 12px;
		font-weight: 400;
		padding: 4px 13px;
		min-width: 80px;
		text-align: center;
	}

	.ant-tag.event-category {
		background-color: transparent;
		font-size: 16px;
		color: #334155;
		padding: 0;
		text-align: left;
	}

	.author {
		font-size: 16px;
		color: #334155;
		text-transform: capitalize;
	}
	.etn-table-text {
		font-size: 14px;
		color: #202223;
		font-weight: 400;
		text-transform: capitalize;
	}
	.recurring-badge {
		background-color: #e9edf1;
		color: #1890ff;
		font-size: 12px;
		padding: 5px 12px;
		border-radius: 50px;
		font-weight: 600;
		margin-inline: 10px;
	}
`,r=a.default.button`
	display: flex;
	align-items: center;
	height: 40px;
	gap: 8px;
	padding: 8px 16px;
	background: #f9f5ff;
	border: none;
	border-radius: 6px;
	cursor: pointer;
	position: relative;
	transition: all 0.2s ease;
	svg {
		color: #ff69b4;
	}
`,o=a.default.span`
	background: linear-gradient(
		90deg,
		#fc8327 0%,
		#e83aa5 50.5%,
		#3a4ff2 100%
	);
	-webkit-background-clip: text;
	-webkit-text-fill-color: rgba( 0, 0, 0, 0 );
	background-clip: text;
`},11046(e,t,n){n.r(t),n.d(t,{default:()=>f});var a=n(51609),i=n(29491),r=n(47143),o=n(27723),l=n(58373),d=n(57770),c=n(60215),s=n(30442),p=n(95998);const g=(0,r.withDispatch)(e=>{const t=e(s.W);return{refreshTagsList:()=>t.invalidateResolution("getEventTagList")}}),m=(0,r.withSelect)(e=>{const t=e(s.W);return{tagList:t.getEventTagList(),hasResolved:t.hasFinishedResolution("getEventTagList")}}),f=(0,i.compose)(m,g)(function(e){const{tagList:t,hasResolved:n,refreshTagsList:i}=e;let g=(0,d.A)(t?.items,"name");g=(0,d.A)(g,"description");const{isModalOpen:m}=(0,r.useSelect)(e=>e(s.W).getTagState()),{setTagState:f}=(0,r.useDispatch)(s.W),x=e=>{f({isModalOpen:e})};return(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{className:"event-tags-wrapper"},(0,a.createElement)(p.A,{title:(0,o.__)("Event Tags","eventin"),onClickCallback:()=>x(!0),buttonText:(0,o.__)("New Tag","eventin")}),(0,a.createElement)(l.A,{hasResolved:n,tagList:g,refreshTagsList:i,total:t?.total}),(0,a.createElement)(c.A,{modalOpen:m,setModalOpen:x,refreshTagsList:i})))})},63352(e,t,n){n.d(t,{A:()=>x});var a=n(51609),i=n(29491),r=n(47143),o=n(52619),l=n(27723),d=n(19549),c=n(54725),s=n(7638),p=n(30442),g=n(64282);const{confirm:m}=d.A,f=(0,r.withDispatch)(e=>{const t=e(p.W);return{refreshEventTags:()=>t.invalidateResolution("getEventTagList")}}),x=(0,i.compose)(f)(function(e){const{refreshEventTags:t,record:n}=e;return(0,a.createElement)(s.Ay,{variant:s.Vt,onClick:()=>{m({title:(0,l.__)("Are you sure?","eventin"),icon:(0,a.createElement)(c.DeleteOutlinedEmpty,null),content:(0,l.__)("Are you sure you want to delete this tag?","eventin"),okText:(0,l.__)("Delete","eventin"),okButtonProps:{type:"primary",danger:!0,classNames:"delete-btn"},centered:!0,onOk:async()=>{try{await g.A.eventTags.deleteTag(n.id),t(),(0,o.doAction)("eventin_notification",{type:"success",message:(0,l.__)("Successfully deleted the tag!","eventin")})}catch(e){console.error("Error deleting tag!",e),(0,o.doAction)("eventin_notification",{type:"error",message:(0,l.__)("Failed to delete the tag!","eventin")})}},onCancel(){}})}},(0,a.createElement)(c.DeleteOutlined,{width:"16",height:"16"}))})},63377(e,t,n){n.d(t,{A:()=>d});var a=n(51609),i=n(47143),r=n(54725),o=n(7638),l=n(30442);function d(e){const{record:t}=e,{setTagState:n}=(0,i.useDispatch)(l.W);return(0,a.createElement)(o.Ay,{variant:o.Vt,onClick:()=>{n({editData:t,isModalOpen:!0})}},(0,a.createElement)(r.EditOutlined,{width:"16",height:"16"}))}},56289(e,t,n){n.d(t,{A:()=>l});var a=n(51609),i=n(90070),r=n(63352),o=n(63377);function l(e){const{record:t}=e;return(0,a.createElement)(i.A,{size:"small",className:"event-actions"},(0,a.createElement)(o.A,{record:t}),(0,a.createElement)(r.A,{record:t}))}},60479(e,t,n){n.d(t,{A:()=>h});var a=n(51609),i=n(27723),r=n(86087),o=n(52619),l=n(47143),d=n(29491),c=n(92911),s=n(62215),p=n(49111),g=n(7638),m=n(30442),f=n(64282);const x=(0,l.withDispatch)(e=>{const t=e(m.W);return{refreshTagsList:()=>t.invalidateResolution("getEventTagList")}}),h=(0,d.compose)(x)(({refreshTagsList:e})=>{const{selectedTags:t,tagActionLoading:n}=(0,l.useSelect)(e=>e(m.W).getTagState()),{setTagState:d}=(0,l.useDispatch)(m.W),[x,h]=(0,r.useState)(null),u=[{label:(0,i.__)("Delete","eventin"),value:"delete"}],v={delete:async()=>{if(t.length){d({tagActionLoading:!0});try{const n=(0,s.A)(t);await f.A.eventTags.deleteTag(n),(0,o.doAction)("eventin_notification",{type:"success",message:(0,i.__)("Tags deleted successfully","eventin")}),e()}catch(e){(0,o.doAction)("eventin_notification",{type:"error",message:(0,i.__)("Failed to delete tags","eventin")})}finally{d({tagActionLoading:!1}),h(null),d({selectedTags:[]})}}else(0,o.doAction)("eventin_notification",{type:"error",message:(0,i.__)("Please select at least one tag","eventin")})}};return(0,a.createElement)(c.A,{gap:10},(0,a.createElement)(p.cL,{value:x,onChange:e=>h(e),options:u,placeholder:(0,i.__)("Bulk Actions","eventin"),allowClear:!0,disabled:n}),(0,a.createElement)(g.Ay,{variant:g.TB,onClick:()=>v[x]?.(),loading:n,sx:{height:"36px"},disabled:!x},(0,i.__)("Apply","eventin")))})},50780(e,t,n){n.d(t,{A:()=>o});var a=n(51609),i=n(27723),r=n(56289);window.innerWidth;const o=[{title:(0,i.__)("Tags","eventin"),dataIndex:"name",key:"name",width:250,render:e=>(0,a.createElement)("p",{className:"event-title"},e)},{title:(0,i.__)("Description","eventin"),dataIndex:"description",key:"description",render:e=>(0,a.createElement)("span",{className:"author"},e)},{title:(0,i.__)("Action","eventin"),key:"action",width:120,render:(e,t)=>(0,a.createElement)(r.A,{record:t})}]},91174(e,t,n){n.d(t,{A:()=>p});var a=n(51609),i=n(27723),r=n(92911),o=n(37486),l=n(60479),d=n(57933),c=n(71183),s=n(10012);const p=({handleSearchInput:e,selectedTags:t,refreshTagsList:n})=>{const p=(0,d.useDebounce)(e,500);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(o.W,{isFiltered:!1,filteredTopMenu:(0,a.createElement)(a.Fragment,null,(0,a.createElement)(l.A,null),(0,a.createElement)(r.A,{gap:10},(0,a.createElement)(s.DO,{placeholder:(0,i.__)("Search by tag name","eventin"),onChange:p,allowClear:!0}),(0,a.createElement)(c.A,{isSelectingItems:!!t?.length,selectedTags:t,refreshTagsList:n})))}))}},71183(e,t,n){n.d(t,{A:()=>d});var a=n(51609),i=n(92911),r=n(64464),o=n(84174),l=n(6390);const d=({isSelectingItems:e,selectedTags:t,refreshTagsList:n})=>(0,a.createElement)(i.A,{justify:"end",gap:8},(0,a.createElement)(l.If,{condition:!e},(0,a.createElement)(i.A,{gap:0},(0,a.createElement)(r.A,{type:"event/tags",isSelectingItems:e}),(0,a.createElement)(o.A,{type:"event/tags",paramsKey:"tag_import",revalidateList:n}))),(0,a.createElement)(l.If,{condition:e},(0,a.createElement)(i.A,{justify:"end",gap:8},(0,a.createElement)(r.A,{type:"event/tags",isSelectingItems:e,arrayOfIds:t}))))},58373(e,t,n){n.d(t,{A:()=>p});var a=n(51609),i=(n(27723),n(47143)),r=n(91174),o=n(50780),l=n(85666),d=n(40728),c=n(97455),s=n(30442);const p=e=>{const{tagList:t,hasResolved:n,refreshTagsList:p,total:g}=e,{selectedTags:m,pagination:f,params:x}=(0,i.useSelect)(e=>e(s.W).getTagState()),{setTagState:h}=(0,i.useDispatch)(s.W),u={selectedRowKeys:m,onChange:e=>{h({selectedTags:e})}};return(0,a.createElement)(c.ff,{className:"event-tags-wrapper"},(0,a.createElement)(r.A,{handleSearchInput:e=>{h({params:{...x,search:e.target.value||""}}),p()},selectedTags:m,refreshTagsList:p}),(0,a.createElement)(l.A,{loading:!n,columns:o.A,dataSource:t,rowSelection:u,rowKey:e=>e.id,scroll:{x:600},showPagination:!1}),(0,a.createElement)(d.A,{total:g,currentPage:f.paged,pageSize:f.per_page,onPageChange:e=>{h({pagination:{...f,paged:Number(e)}}),p()},onPageSizeChange:e=>{h({pagination:{per_page:Number(e),paged:1}}),p()}}))}}}]);