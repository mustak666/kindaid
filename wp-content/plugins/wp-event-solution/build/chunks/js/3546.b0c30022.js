"use strict";(globalThis.webpackChunkwp_event_solution=globalThis.webpackChunkwp_event_solution||[]).push([[3546],{34388(e,t,a){a.d(t,{i:()=>i});var n=a(51609),r=a(27723),o=a(54725),l=a(48842);const i=e=>[{key:"json",label:(0,n.createElement)(l.A,{style:{padding:"4px 0",fontSize:"14px",marginLeft:"6px"}},(0,r.__)("Export JSON Format","eventin")),icon:(0,n.createElement)(o.JsonFileIcon,null),onClick:()=>e("json")},{key:"csv",label:(0,n.createElement)(l.A,{style:{padding:"4px 0",fontSize:"14px",marginLeft:"6px"}},(0,r.__)("Export CSV Format","eventin")),icon:(0,n.createElement)(o.CsvFileIcon,null),onClick:()=>e("csv")}]},64464(e,t,a){a.d(t,{A:()=>d});var n=a(51609),r=a(11721),o=a(32099),l=a(7638),i=a(54725),s=a(27723),c=a(50620),p=a(34388);const d=({type:e,arrayOfIds:t,shouldShow:a,eventId:d,isSelectingItems:m})=>{const{isDownloading:u,handleExport:g}=(0,c.i)({type:e,arrayOfIds:t,eventId:d}),v={display:"flex",alignItems:"center",borderColor:"#d9d9d9",fontSize:"14px",fontWeight:400,color:"#64748B",height:"36px",padding:"10px",borderTopRightRadius:m?"4px":"0px",borderBottomRightRadius:m?"4px":"0px"};return(0,n.createElement)(o.A,{title:a?(0,s.__)("Upgrade to Pro","eventin"):(0,s.__)("Download table data","eventin")},a?(0,n.createElement)(l.Ay,{variant:l.Vt,onClick:()=>window.open("https://themewinter.com/eventin/pricing/","_blank"),sx:v},(0,n.createElement)(i.ExportIcon,{width:16,height:16}),(0,n.createElement)(i.ProFlagIcon,null)):(0,n.createElement)(r.A,{menu:{items:(0,p.i)(g)},placement:"bottomRight",arrow:!0,disabled:a},(0,n.createElement)(l.Ay,{variant:l.Vt,loading:u,sx:v},(0,n.createElement)(i.ExportIcon,{width:16,height:16}))))}},60254(e,t,a){a.d(t,{R:()=>o});var n=a(1455),r=a.n(n);const o=async({type:e,format:t,ids:a=[],eventId:n})=>{let o=`/eventin/v2/${e}/export`;n&&(o+=`?event_id=${n}`);const l=await r()({path:o,method:"POST",data:{format:t,ids:a},parse:"csv"!==t});return"csv"===t?l.text():l}},50620(e,t,a){a.d(t,{i:()=>s});var n=a(86087),r=a(52619),o=a(27723),l=a(60254),i=a(96781);const s=({type:e,arrayOfIds:t,eventId:a})=>{const[s,c]=(0,n.useState)(!1);return{isDownloading:s,handleExport:async n=>{try{c(!0);const s=await(0,l.R)({type:e,format:n,ids:t,eventId:a});"json"===n&&(0,i.P)(JSON.stringify(s,null,2),`${e}.json`,"application/json"),"csv"===n&&(0,i.P)(s,`${e}.csv`,"text/csv"),(0,r.doAction)("eventin_notification",{type:"success",message:(0,o.__)("Exported successfully","eventin")})}catch(e){console.error(e),(0,r.doAction)("eventin_notification",{type:"error",message:e?.message||(0,o.__)("Export failed","eventin")})}finally{c(!1)}}}}},96781(e,t,a){a.d(t,{P:()=>n});const n=(e,t,a)=>{const n=new Blob([e],{type:a}),r=URL.createObjectURL(n),o=document.createElement("a");o.href=r,o.download=t,o.click(),URL.revokeObjectURL(r)}},84174(e,t,a){a.d(t,{A:()=>v});var n=a(51609),r=a(1455),o=a.n(r),l=a(86087),i=a(52619),s=a(27723),c=a(32099),p=a(81029),d=a(7638),m=a(500),u=a(54725);const{Dragger:g}=p.A,v=e=>{const{type:t,paramsKey:a,shouldShow:r,revalidateList:p}=e||{},[v,h]=(0,l.useState)([]),[f,y]=(0,l.useState)(!1),[k,E]=(0,l.useState)(!1),_=()=>{E(!1)},x=`/eventin/v2/${t}/import`,b=(0,l.useCallback)(async e=>{try{y(!0);const t=await o()({path:x,method:"POST",body:e});return(0,i.doAction)("eventin_notification",{type:"success",message:(0,s.__)(` ${t?.message} `,"eventin")}),p(!0),h([]),y(!1),_(),t?.data||""}catch(e){throw y(!1),(0,i.doAction)("eventin_notification",{type:"error",message:e.message}),console.error("API Error:",e),e}},[t]),w={name:"file",accept:".json, .csv",multiple:!1,maxCount:1,onRemove:e=>{const t=v.indexOf(e),a=v.slice();a.splice(t,1),h(a)},beforeUpload:e=>(h([e]),!1),fileList:v},A=r?()=>window.open("https://themewinter.com/eventin/pricing/","_blank"):()=>E(!0);return(0,n.createElement)(n.Fragment,null,(0,n.createElement)(c.A,{title:r?(0,s.__)("Upgrade to Pro","eventin"):(0,s.__)("Import data","eventin")},(0,n.createElement)(d.Ay,{className:"etn-import-btn eventin-import-button",variant:d.Vt,sx:{display:"flex",alignItems:"center",borderColor:"#d9d9d9",fontSize:"14px",fontWeight:400,color:"#64748B",height:"36px",padding:"10px",borderTopLeftRadius:"0px",borderBottomLeftRadius:"0px"},onClick:A},(0,n.createElement)(u.ImportIcon,{width:16,height:16}),r&&(0,n.createElement)(u.ProFlagIcon,null))),(0,n.createElement)(m.A,{title:(0,s.__)("Import file","eventin"),open:k,onCancel:_,maskClosable:!1,footer:null,centered:!0,destroyOnHidden:!0,wrapClassName:"etn-import-modal-wrap",className:"etn-import-modal-container eventin-import-modal-container"},(0,n.createElement)("div",{className:"etn-import-file eventin-import-file-container",style:{marginTop:"25px"}},(0,n.createElement)(g,{...w},(0,n.createElement)("p",{className:"ant-upload-drag-icon"},(0,n.createElement)(u.UploadCloudIcon,{width:"50",height:"50"})),(0,n.createElement)("p",{className:"ant-upload-text"},(0,s.__)("Click or drag file to this area to upload","eventin")),(0,n.createElement)("p",{className:"ant-upload-hint"},(0,s.__)("Choose a JSON or CSV file to import","eventin")),0!=v.length&&(0,n.createElement)(d.Ay,{onClick:async e=>{e.preventDefault(),e.stopPropagation();const t=new FormData;t.append(a,v[0],v[0].name),await b(t)},disabled:0===v.length,loading:f,variant:d.zB,className:"eventin-start-import-button"},f?(0,s.__)("Importing","eventin"):(0,s.__)("Start Import","eventin"))))))}},53546(e,t,a){a.r(t),a.d(t,{default:()=>c});var n=a(51609),r=a(27723),o=a(47767),l=a(75093),i=a(96031),s=a(5004);const c=function(){const e=(0,o.useNavigate)();return(0,n.createElement)("div",null,(0,n.createElement)(i.A,{title:(0,r.__)("Speakers and Organizers","eventin"),buttonText:(0,r.__)("Add New","eventin"),onClickCallback:()=>e("/speakers/create")}),(0,n.createElement)(s.A,null),(0,n.createElement)(l.FloatingHelpButton,null))}},96031(e,t,a){a.d(t,{A:()=>v});var n=a(51609),r=a(56427),o=a(27723),l=a(52741),i=a(11721),s=a(92911),c=a(47767),p=a(69815),d=a(7638),m=a(18062),u=a(27154),g=a(54725);function v(e){const{title:t,buttonText:a,onClickCallback:p}=e,v=(0,c.useNavigate)(),{pathname:h}=(0,c.useLocation)(),f=["/speakers"!==h&&{key:"0",label:(0,o.__)("Speaker List","eventin"),icon:(0,n.createElement)(g.EventListIcon,{width:20,height:20}),onClick:()=>{v("/speakers")}},"/speakers/group"!==h&&{key:"2",label:(0,o.__)("Speaker Groups","eventin"),icon:(0,n.createElement)(g.CategoriesIcon,null),onClick:()=>{v("/speakers/group")}}];return(0,n.createElement)(r.Fill,{name:u.PRIMARY_HEADER_NAME},(0,n.createElement)(s.A,{justify:"space-between",align:"center",wrap:"wrap",gap:20},(0,n.createElement)(m.A,{title:t}),(0,n.createElement)("div",{style:{display:"flex",alignItems:"center"}},(0,n.createElement)(d.Ay,{variant:d.zB,htmlType:"button",onClick:p,sx:{display:"flex",alignItems:"center"}},(0,n.createElement)(g.PlusOutlined,null),a),(0,n.createElement)(l.A,{type:"vertical",style:{height:"40px",marginInline:"12px",top:"0"}}),(0,n.createElement)(s.A,{gap:12},(0,n.createElement)(i.A,{menu:{items:f},trigger:["click"],placement:"bottomRight",overlayClassName:"action-dropdown"},(0,n.createElement)(d.Ay,{variant:d.Vt,sx:{borderColor:"#E5E5E5",color:"#8C8C8C"}},(0,n.createElement)(g.MoreIconOutlined,null)))))))}p.default.div`
	@media ( max-width: 360px ) {
		display: none;
		border: 1px solid red;
	}
`},99391(e,t,a){a.d(t,{A:()=>g});var n=a(51609),r=a(19549),o=a(29491),l=a(47143),i=a(52619),s=a(27723),c=a(54725),p=a(7638),d=a(64282);const{confirm:m}=r.A,u=(0,l.withDispatch)(e=>({shouldRefetchSpeakerList:e("eventin/global").setRevalidateSpeakerList})),g=(0,o.compose)(u)(function(e){const{shouldRefetchSpeakerList:t,record:a}=e;return(0,n.createElement)(p.Ib,{variant:p.Vt,onClick:()=>{m({title:(0,s.__)("Are you sure?","eventin"),icon:(0,n.createElement)(c.DeleteOutlinedEmpty,null),content:(0,s.__)("Are you sure you want to delete this speaker?","eventin"),okText:(0,s.__)("Delete","eventin"),okButtonProps:{type:"primary",danger:!0,classNames:"delete-btn"},centered:!0,onOk:async()=>{try{await d.A.speakers.deleteSpeaker(a.id),t(!0),(0,i.doAction)("eventin_notification",{type:"success",message:(0,s.__)("Successfully deleted the speaker!","eventin")})}catch(e){console.error("Error deleting category",e),(0,i.doAction)("eventin_notification",{type:"error",message:(0,s.__)("Failed to delete the speaker!","eventin")})}},onCancel(){}})}})})},72190(e,t,a){a.d(t,{A:()=>l});var n=a(51609),r=a(7638),o=a(47767);function l(e){const{record:t}=e,a=(0,o.useNavigate)();return(0,n.createElement)(r.vQ,{variant:r.Vt,onClick:()=>{a(`/speakers/edit/${t.id}`)}})}},63608(e,t,a){a.d(t,{A:()=>s});var n=a(51609),r=a(90070),o=a(99391),l=a(72190),i=a(89100);function s(e){const{record:t}=e;return(0,n.createElement)(r.A,{size:"small",className:"event-actions"},(0,n.createElement)(i.A,{record:t}),(0,n.createElement)(l.A,{record:t}),(0,n.createElement)(o.A,{record:t}))}},89100(e,t,a){a.d(t,{A:()=>l});var n=a(51609),r=(a(86087),a(54725)),o=a(7638);function l(e){const{record:t}=e;return(0,n.createElement)(n.Fragment,null,(0,n.createElement)(o.Ay,{variant:o.Vt,onClick:()=>{window.open(`${t?.author_url}`,"_blank")}},(0,n.createElement)(r.EyeOutlinedIcon,{width:"16",height:"16"})))}},32677(e,t,a){a.d(t,{A:()=>s});var n=a(51609),r=a(27723),o=a(18537),l=a(63608),i=a(84976);const s=[{title:(0,r.__)("Name","eventin"),dataIndex:"name",key:"name",width:"20%",render:(e,t)=>(0,n.createElement)(i.Link,{to:`/speakers/edit/${t.id}`,className:"event-title"},(0,o.decodeEntities)(e))},{title:(0,r.__)("Job Title","eventin"),dataIndex:"designation",key:"designation",render:e=>(0,n.createElement)("span",{className:"author"}," ",(0,o.decodeEntities)(e)||"-")},{title:(0,r.__)("Group","eventin"),dataIndex:"speaker_group",key:"speaker_group",render:e=>(0,n.createElement)("span",null,Array.isArray(e)&&e?.join(", "))},{title:(0,r.__)("Role","eventin"),dataIndex:"category",key:"category",render:e=>e?.map((e,t)=>(0,n.createElement)("span",{key:t,className:"etn-category-group"},e))},{title:(0,r.__)("Company","eventin"),dataIndex:"company_name",key:"company_name",render:e=>(0,n.createElement)("span",{className:"author"}," ",(0,o.decodeEntities)(e)||"-")},{title:(0,r.__)("Action","eventin"),key:"action",width:120,render:(e,t)=>(0,n.createElement)(l.A,{record:t})}]},64525(e,t,a){a.d(t,{A:()=>E});var n=a(51609),r=a(92911),o=a(79888),l=a(36492),i=a(27723),s=a(29491),c=a(47143),p=a(54725),d=a(79351),m=a(62215),u=a(64282),g=a(64464),v=a(84174),h=a(57933),f=a(44655);const y=(0,c.withSelect)(e=>{const t=e("eventin/global");return{speakerGroup:t.getSpeakerCategories(),isLoading:t.isResolving("getSpeakerCategories")}}),k=(0,c.withDispatch)(e=>({shouldRefetchSpeakerList:e("eventin/global").setRevalidateSpeakerList})),E=(0,s.compose)(y,k)(e=>{const{selectedSpeakers:t,setSelectedSpeakers:a,setParams:s,speakerGroup:c,shouldRefetchSpeakerList:y}=e,k=!!t?.length,E=c?.map(e=>({label:e.name,value:e.id})),_=[{label:(0,i.__)("All","eventin"),value:"all"},{label:(0,i.__)("Speaker","eventin"),value:"speaker"},{label:(0,i.__)("Organizer","eventin"),value:"organizer"}],x=(0,h.useDebounce)(e=>{s(t=>({...t,search:e.target.value||void 0}))},500);return(0,n.createElement)(f.O,{className:"filter-wrapper"},(0,n.createElement)(r.A,{justify:"space-between",align:"center",wrap:"wrap",gap:10},(0,n.createElement)(r.A,{justify:"start",align:"center",gap:8},k?(0,n.createElement)(d.A,{selectedCount:t?.length,callbackFunction:async()=>{const e=(0,m.A)(t);await u.A.speakers.deleteSpeaker(e),y(!0),a([])},setSelectedRows:a}):(0,n.createElement)(n.Fragment,null,(0,n.createElement)(l.A,{placeholder:(0,i.__)("Filter by Group","eventin"),options:E,size:"default",style:{minWidth:"200px",width:"100%"},onChange:e=>{s(t=>({...t,speaker_group:e}))},allowClear:!0,showSearch:!0,filterOption:(e,t)=>t?.label?.toLowerCase().includes(e?.toLowerCase())}),(0,n.createElement)(l.A,{placeholder:(0,i.__)("Filter by Role","eventin"),options:_,defaultValue:"all",size:"default",style:{minWidth:"200px",width:"100%"},onChange:e=>{s(t=>({...t,category:e}))},allowClear:!0,showSearch:!0}))),!k&&(0,n.createElement)(r.A,{justify:"end",gap:8},(0,n.createElement)(o.A,{className:"event-filter-by-name",placeholder:(0,i.__)("Search by Name","eventin"),size:"default",prefix:(0,n.createElement)(p.SearchIconOutlined,null),onChange:x,allowClear:!0}),(0,n.createElement)(r.A,{gap:0},(0,n.createElement)(g.A,{type:"speakers"}),(0,n.createElement)(v.A,{type:"speakers",paramsKey:"speaker_import",revalidateList:y}))),k&&(0,n.createElement)(r.A,{justify:"end",gap:8},(0,n.createElement)(g.A,{type:"speakers",arrayOfIds:t}))))})},73080(e,t,a){a.d(t,{G:()=>i});var n=a(86087),r=a(47767),o=a(6836),l=a(64282);const i=(e,t,a)=>{const[i,s]=(0,n.useState)([]),[c,p]=(0,n.useState)(null),[d,m]=(0,n.useState)(!0),u=(0,r.useNavigate)(),g=(0,n.useCallback)(async()=>{m(!0);try{const{paged:t,per_page:a,speaker_group:n,category:r,search:o}=e,i=await l.A.speakers.speakersList({speaker_group:n,category:r,search:o,paged:t,per_page:a}),c=Boolean(n)||Boolean(r)||Boolean(o),d=i.headers.get("X-Wp-Total")||0;p(d);const m=await i.json();s(m||[]),c||0!==Number(d)||u("/speakers/empty",{replace:!0})}catch(e){console.error("Error fetching speakers:",e)}finally{m(!1),(0,o.scrollToTop)()}},[e,u]);return(0,n.useEffect)(()=>{g()},[g]),(0,n.useEffect)(()=>{t&&(g(),a(!1))},[t,g,a]),{filteredList:i,totalCount:c,loading:d}}},5004(e,t,a){a.d(t,{A:()=>f});var n=a(51609),r=a(29491),o=a(47143),l=a(86087),i=a(27723),s=a(75063),c=a(16784),p=a(75093),d=a(32677),m=a(64525),u=a(73080),g=a(44655);const v=(0,o.withDispatch)(e=>({setShouldRevalidateSpeakerList:e("eventin/global").setRevalidateSpeakerList})),h=(0,o.withSelect)(e=>({shouldRevalidateSpeakerList:e("eventin/global").getRevalidateSpeakerList()})),f=(0,r.compose)([v,h])(({isLoading:e,setShouldRevalidateSpeakerList:t,shouldRevalidateSpeakerList:a})=>{const[r,o]=(0,l.useState)({paged:1,per_page:10}),[v,h]=(0,l.useState)([]),{filteredList:f,totalCount:y,loading:k}=(0,u.G)(r,a,t),E=(0,l.useMemo)(()=>({selectedRowKeys:v,onChange:h}),[v]),_=(0,l.useMemo)(()=>({current:r.paged,pageSize:r.per_page,total:y,showSizeChanger:!0,showLessItems:!0,onShowSizeChange:(e,t)=>o(e=>({...e,per_page:t})),onChange:e=>o(t=>({...t,paged:e})),showTotal:(e,t)=>(0,n.createElement)(p.CustomShowTotal,{totalCount:e,range:t,listText:(0,i.__)(" speakers","eventin")})}),[r,y]);return e?(0,n.createElement)(g.f,{className:"eventin-page-wrapper"},(0,n.createElement)(s.A,{active:!0})):(0,n.createElement)(g.f,{className:"eventin-page-wrapper"},(0,n.createElement)("div",{className:"event-list-wrapper"},(0,n.createElement)(m.A,{selectedSpeakers:v,setSelectedSpeakers:h,setParams:o}),(0,n.createElement)(c.A,{className:"eventin-data-table",columns:d.A,dataSource:f,loading:k,rowSelection:E,rowKey:e=>e.id,scroll:{x:900},sticky:{offsetHeader:100},pagination:_})))})},44655(e,t,a){a.d(t,{O:()=>o,f:()=>r});var n=a(69815);const r=n.default.div`
	background-color: #f4f6fa;
	padding: 12px 32px;
	min-height: 100vh;

	.ant-table-wrapper {
		padding: 15px 30px;
		background-color: #fff;
		border-radius: 0 0 12px 12px;
	}

	.event-list-wrapper {
		border-radius: 0 0 12px 12px;
	}

	.ant-table-thead {
		> tr {
			> th {
				background-color: #ffffff;
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

	.event-actions {
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

	.etn-category-group {
		display: flex;
		gap: 10px;
		text-transform: capitalize;
	}
`,o=n.default.div`
	padding: 22px 36px;
	background: #fff;
	border-radius: 12px 12px 0 0;
	border-bottom: 1px solid #ddd;

	.ant-form-item {
		margin-bottom: 0;
	}

	.event-filter-by-name {
		height: 36px;
		border: 1px solid #ddd;
		max-width: 220px;

		input.ant-input {
			min-height: auto;
		}
	}
`}}]);