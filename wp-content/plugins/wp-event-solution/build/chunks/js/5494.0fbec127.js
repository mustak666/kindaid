"use strict";(globalThis.webpackChunkwp_event_solution=globalThis.webpackChunkwp_event_solution||[]).push([[5494],{34388(e,t,n){n.d(t,{i:()=>r});var a=n(51609),o=n(27723),l=n(54725),i=n(48842);const r=e=>[{key:"json",label:(0,a.createElement)(i.A,{style:{padding:"4px 0",fontSize:"14px",marginLeft:"6px"}},(0,o.__)("Export JSON Format","eventin")),icon:(0,a.createElement)(l.JsonFileIcon,null),onClick:()=>e("json")},{key:"csv",label:(0,a.createElement)(i.A,{style:{padding:"4px 0",fontSize:"14px",marginLeft:"6px"}},(0,o.__)("Export CSV Format","eventin")),icon:(0,a.createElement)(l.CsvFileIcon,null),onClick:()=>e("csv")}]},64464(e,t,n){n.d(t,{A:()=>p});var a=n(51609),o=n(11721),l=n(32099),i=n(7638),r=n(54725),c=n(27723),s=n(50620),d=n(34388);const p=({type:e,arrayOfIds:t,shouldShow:n,eventId:p,isSelectingItems:u})=>{const{isDownloading:m,handleExport:h}=(0,s.i)({type:e,arrayOfIds:t,eventId:p}),g={display:"flex",alignItems:"center",borderColor:"#d9d9d9",fontSize:"14px",fontWeight:400,color:"#64748B",height:"36px",padding:"10px",borderTopRightRadius:u?"4px":"0px",borderBottomRightRadius:u?"4px":"0px"};return(0,a.createElement)(l.A,{title:n?(0,c.__)("Upgrade to Pro","eventin"):(0,c.__)("Download table data","eventin")},n?(0,a.createElement)(i.Ay,{variant:i.Vt,onClick:()=>window.open("https://themewinter.com/eventin/pricing/","_blank"),sx:g},(0,a.createElement)(r.ExportIcon,{width:16,height:16}),(0,a.createElement)(r.ProFlagIcon,null)):(0,a.createElement)(o.A,{menu:{items:(0,d.i)(h)},placement:"bottomRight",arrow:!0,disabled:n},(0,a.createElement)(i.Ay,{variant:i.Vt,loading:m,sx:g},(0,a.createElement)(r.ExportIcon,{width:16,height:16}))))}},60254(e,t,n){n.d(t,{R:()=>l});var a=n(1455),o=n.n(a);const l=async({type:e,format:t,ids:n=[],eventId:a})=>{let l=`/eventin/v2/${e}/export`;a&&(l+=`?event_id=${a}`);const i=await o()({path:l,method:"POST",data:{format:t,ids:n},parse:"csv"!==t});return"csv"===t?i.text():i}},50620(e,t,n){n.d(t,{i:()=>c});var a=n(86087),o=n(52619),l=n(27723),i=n(60254),r=n(96781);const c=({type:e,arrayOfIds:t,eventId:n})=>{const[c,s]=(0,a.useState)(!1);return{isDownloading:c,handleExport:async a=>{try{s(!0);const c=await(0,i.R)({type:e,format:a,ids:t,eventId:n});"json"===a&&(0,r.P)(JSON.stringify(c,null,2),`${e}.json`,"application/json"),"csv"===a&&(0,r.P)(c,`${e}.csv`,"text/csv"),(0,o.doAction)("eventin_notification",{type:"success",message:(0,l.__)("Exported successfully","eventin")})}catch(e){console.error(e),(0,o.doAction)("eventin_notification",{type:"error",message:e?.message||(0,l.__)("Export failed","eventin")})}finally{s(!1)}}}}},96781(e,t,n){n.d(t,{P:()=>a});const a=(e,t,n)=>{const a=new Blob([e],{type:n}),o=URL.createObjectURL(a),l=document.createElement("a");l.href=o,l.download=t,l.click(),URL.revokeObjectURL(o)}},84174(e,t,n){n.d(t,{A:()=>g});var a=n(51609),o=n(1455),l=n.n(o),i=n(86087),r=n(52619),c=n(27723),s=n(32099),d=n(81029),p=n(7638),u=n(500),m=n(54725);const{Dragger:h}=d.A,g=e=>{const{type:t,paramsKey:n,shouldShow:o,revalidateList:d}=e||{},[g,v]=(0,i.useState)([]),[f,x]=(0,i.useState)(!1),[y,_]=(0,i.useState)(!1),E=()=>{_(!1)},w=`/eventin/v2/${t}/import`,b=(0,i.useCallback)(async e=>{try{x(!0);const t=await l()({path:w,method:"POST",body:e});return(0,r.doAction)("eventin_notification",{type:"success",message:(0,c.__)(` ${t?.message} `,"eventin")}),d(!0),v([]),x(!1),E(),t?.data||""}catch(e){throw x(!1),(0,r.doAction)("eventin_notification",{type:"error",message:e.message}),console.error("API Error:",e),e}},[t]),A={name:"file",accept:".json, .csv",multiple:!1,maxCount:1,onRemove:e=>{const t=g.indexOf(e),n=g.slice();n.splice(t,1),v(n)},beforeUpload:e=>(v([e]),!1),fileList:g},S=o?()=>window.open("https://themewinter.com/eventin/pricing/","_blank"):()=>_(!0);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(s.A,{title:o?(0,c.__)("Upgrade to Pro","eventin"):(0,c.__)("Import data","eventin")},(0,a.createElement)(p.Ay,{className:"etn-import-btn eventin-import-button",variant:p.Vt,sx:{display:"flex",alignItems:"center",borderColor:"#d9d9d9",fontSize:"14px",fontWeight:400,color:"#64748B",height:"36px",padding:"10px",borderTopLeftRadius:"0px",borderBottomLeftRadius:"0px"},onClick:S},(0,a.createElement)(m.ImportIcon,{width:16,height:16}),o&&(0,a.createElement)(m.ProFlagIcon,null))),(0,a.createElement)(u.A,{title:(0,c.__)("Import file","eventin"),open:y,onCancel:E,maskClosable:!1,footer:null,centered:!0,destroyOnHidden:!0,wrapClassName:"etn-import-modal-wrap",className:"etn-import-modal-container eventin-import-modal-container"},(0,a.createElement)("div",{className:"etn-import-file eventin-import-file-container",style:{marginTop:"25px"}},(0,a.createElement)(h,{...A},(0,a.createElement)("p",{className:"ant-upload-drag-icon"},(0,a.createElement)(m.UploadCloudIcon,{width:"50",height:"50"})),(0,a.createElement)("p",{className:"ant-upload-text"},(0,c.__)("Click or drag file to this area to upload","eventin")),(0,a.createElement)("p",{className:"ant-upload-hint"},(0,c.__)("Choose a JSON or CSV file to import","eventin")),0!=g.length&&(0,a.createElement)(p.Ay,{onClick:async e=>{e.preventDefault(),e.stopPropagation();const t=new FormData;t.append(n,g[0],g[0].name),await b(t)},disabled:0===g.length,loading:f,variant:p.zB,className:"eventin-start-import-button"},f?(0,c.__)("Importing","eventin"):(0,c.__)("Start Import","eventin"))))))}},5494(e,t,n){n.r(t),n.d(t,{default:()=>s});var a=n(51609),o=n(47767),l=n(27723),i=n(75093),r=n(26865),c=n(52173);const s=function(e){const t=(0,o.useNavigate)();return(0,a.createElement)("div",null,(0,a.createElement)(c.A,{title:(0,l.__)("Schedule List","eventin"),buttonText:(0,l.__)("New Schedule","eventin"),onClickCallback:()=>t("/schedules/create")}),(0,a.createElement)(r.A,null),(0,a.createElement)(i.FloatingHelpButton,null))}},52173(e,t,n){n.d(t,{A:()=>m});var a=n(51609),o=n(52741),l=n(92911),i=n(47767),r=n(69815),c=n(56427),s=n(7638),d=n(18062),p=n(27154),u=n(54725);function m(e){const{title:t,buttonText:n,onClickCallback:r}=e,{pathname:m}=((0,i.useNavigate)(),(0,i.useLocation)());return(0,a.createElement)(c.Fill,{name:p.PRIMARY_HEADER_NAME},(0,a.createElement)(l.A,{justify:"space-between",align:"center",wrap:"wrap",gap:20},(0,a.createElement)(d.A,{title:t}),(0,a.createElement)("div",{style:{display:"flex",alignItems:"center"}},(0,a.createElement)(s.Ay,{variant:s.zB,htmlType:"button",onClick:r,sx:{display:"flex",alignItems:"center"}},(0,a.createElement)(u.PlusOutlined,null),n),(0,a.createElement)(o.A,{type:"vertical",style:{height:"40px",marginInline:"12px",top:"0"}}))))}r.default.div`
	@media ( max-width: 360px ) {
		display: none;
		border: 1px solid red;
	}
`},72526(e,t,n){n.d(t,{A:()=>c});var a=n(51609),o=n(86087),l=n(54725),i=n(7638),r=n(93294);function c(e){const{record:t}=e,[n,c]=(0,o.useState)(!1);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(i.Ay,{variant:i.Vt,onClick:()=>{c(!0)}},(0,a.createElement)(l.CloneOutlined,{width:"16",height:"16"})),(0,a.createElement)(r.A,{id:t.id,modalOpen:n,setModalOpen:c}))}},35908(e,t,n){n.d(t,{A:()=>h});var a=n(51609),o=n(19549),l=n(29491),i=n(47143),r=n(52619),c=n(27723),s=n(54725),d=n(7638),p=n(64282);const{confirm:u}=o.A,m=(0,i.withDispatch)(e=>{const t=e("eventin/global");return{shouldRefetchScheduleList:e=>{t.setRevalidateScheduleList(e),t.invalidateResolution("getScheduleList")}}}),h=(0,l.compose)(m)(function(e){const{shouldRefetchScheduleList:t,record:n}=e;return(0,a.createElement)(d.Ib,{variant:d.Vt,onClick:()=>{u({title:(0,c.__)("Are you sure?","eventin"),icon:(0,a.createElement)(s.DeleteOutlinedEmpty,null),content:(0,c.__)("Are you sure you want to delete this schedule?","eventin"),okText:(0,c.__)("Delete","eventin"),okButtonProps:{type:"primary",danger:!0,classNames:"delete-btn"},centered:!0,onOk:async()=>{try{await p.A.schedule.deleteSchedule(n.id),t(!0),(0,r.doAction)("eventin_notification",{type:"success",message:(0,c.__)("Successfully deleted the schedule!","eventin")})}catch(e){console.error("Error deleting category",e),(0,r.doAction)("eventin_notification",{type:"error",message:(0,c.__)("Failed to delete the schedule!","eventin")})}},onCancel(){}})}})})},53973(e,t,n){n.d(t,{A:()=>i});var a=n(51609),o=(n(54725),n(7638)),l=n(47767);function i(e){const{record:t}=e,n=(0,l.useNavigate)();return(0,a.createElement)(o.vQ,{variant:o.Vt,onClick:()=>{n(`/schedules/edit/${t.id}`)}})}},67069(e,t,n){n.d(t,{A:()=>c});var a=n(51609),o=n(90070),l=n(35908),i=n(53973),r=n(72526);function c(e){const{record:t}=e;return(0,a.createElement)(o.A,{size:"small",className:"event-actions"},(0,a.createElement)(r.A,{record:t}),(0,a.createElement)(i.A,{record:t}),(0,a.createElement)(l.A,{record:t}))}},93294(e,t,n){n.d(t,{A:()=>g});var a=n(51609),o=n(54725),l=n(27154),i=n(64282),r=n(29491),c=n(47143),s=n(52619),d=n(27723),p=n(92911),u=n(19549),m=n(86087);const h=(0,c.withDispatch)(e=>{const t=e("eventin/global");return{shouldRefetchScheduleList:e=>{t.setRevalidateScheduleList(e),t.invalidateResolution("getScheduleList")}}}),g=(0,r.compose)(h)(function(e){const{id:t,modalOpen:n,setModalOpen:r,shouldRefetchScheduleList:c}=e,[h,g]=(0,m.useState)(!1);return(0,a.createElement)(u.A,{centered:!0,title:(0,a.createElement)(p.A,{gap:10},(0,a.createElement)(o.DuplicateIcon,null),(0,a.createElement)("span",null,(0,d.__)("Are you sure?","eventin"))),open:n,onOk:async()=>{g(!0);try{await i.A.schedule.cloneSchedule(t),(0,s.doAction)("eventin_notification",{type:"success",message:(0,d.__)("Successfully cloned the schedule!","eventin")}),r(!1),c(!0)}catch(e){(0,s.doAction)("eventin_notification",{type:"error",message:(0,d.__)("Failed to clone the schedule!","eventin")})}finally{g(!1)}},confirmLoading:h,onCancel:()=>r(!1),okText:(0,d.__)("Clone","eventin"),okButtonProps:{type:"default",style:{height:"32px",fontWeight:600,fontSize:"14px",color:l.PRIMARY_COLOR,border:`1px solid ${l.PRIMARY_COLOR}`}},cancelButtonProps:{style:{height:"32px"}},cancelText:(0,d.__)("Cancel","eventin"),width:"344px"},(0,a.createElement)("p",null,(0,d.__)("Are you sure you want to clone this schedule?","eventin")))})},15544(e,t,n){n.d(t,{A:()=>c});var a=n(51609),o=n(27723),l=n(67069),i=n(84976),r=n(6836);const c=[{title:(0,o.__)("Program Title","eventin"),dataIndex:"program_title",key:"program_title",width:"50%",render:(e,t)=>(0,a.createElement)(i.Link,{to:`/schedules/edit/${t.id}`,className:"event-title"},e)},{title:(0,o.__)("Date","eventin"),dataIndex:"date",key:"date",render:e=>(0,a.createElement)("span",{className:"author"},(0,r.getWordpressFormattedDate)(e))},{title:(0,o.__)("Action","eventin"),key:"action",width:120,render:(e,t)=>(0,a.createElement)(l.A,{record:t})}]},60568(e,t,n){n(74353)},7762(e,t,n){n.d(t,{A:()=>x});var a=n(51609),o=n(92911),l=n(79888),i=n(27723),r=n(29491),c=n(47143),s=n(54725),d=n(79351),p=n(62215),u=(n(60568),n(64282)),m=n(64464),h=n(84174),g=n(57933),v=n(42602);const f=(0,c.withDispatch)(e=>{const t=e("eventin/global");return{shouldRefetchScheduleList:e=>{t.setRevalidateScheduleList(e),t.invalidateResolution("getScheduleList")}}}),x=(0,r.compose)(f)(e=>{const{selectedSchedules:t,setSelectedSchedules:n,setParams:r,shouldRefetchScheduleList:c,filteredList:f}=e,x=!!t?.length,y=(0,g.useDebounce)(e=>{r(t=>({...t,search:e.target.value||void 0}))},500);return(0,a.createElement)(v.O,{className:"filter-wrapper"},(0,a.createElement)(o.A,{justify:"space-between",align:"center",wrap:"wrap",gap:10},(0,a.createElement)(o.A,{justify:"start",align:"center",gap:8,wrap:"wrap"},x?(0,a.createElement)(d.A,{selectedCount:t?.length,callbackFunction:async()=>{const e=(0,p.A)(t);await u.A.schedule.deleteSchedule(e),c(!0),n([])},setSelectedRows:n}):(0,a.createElement)(l.A,{className:"event-filter-by-name",placeholder:(0,i.__)("Search by program title","eventin"),size:"default",prefix:(0,a.createElement)(s.SearchIconOutlined,null),onChange:y,allowClear:!0})),!x&&(0,a.createElement)(o.A,{justify:"end",gap:0},(0,a.createElement)(m.A,{type:"schedules"}),(0,a.createElement)(h.A,{type:"schedules",paramsKey:"schedule_import",revalidateList:c})),x&&(0,a.createElement)(m.A,{type:"schedules",arrayOfIds:t})))})},98589(e,t,n){n.d(t,{e:()=>r});var a=n(86087),o=n(47767),l=n(6836),i=n(64282);const r=(e,t,n)=>{const[r,c]=(0,a.useState)([]),[s,d]=(0,a.useState)(null),[p,u]=(0,a.useState)(!0),m=(0,o.useNavigate)(),h=(0,a.useCallback)(async()=>{u(!0);const{paged:t,per_page:n,year:a,search:o}=e,r=Boolean(a)||Boolean(o);try{const e=await i.A.schedule.scheduleList({year:a,search:o,paged:t,per_page:n}),l=await e.json();c(l?.items||[]),d(l?.total_items||0),r||0!==l?.total_items||m("/schedules/empty",{replace:!0})}catch(e){console.error("Error fetching schedules:",e)}finally{u(!1),(0,l.scrollToTop)()}},[e,m]);return(0,a.useEffect)(()=>{h()},[h]),(0,a.useEffect)(()=>{t&&(h(),n(!1))},[t,h,n]),{filteredList:r,totalCount:s,loading:p}}},26865(e,t,n){n.d(t,{A:()=>f});var a=n(51609),o=n(29491),l=n(47143),i=n(86087),r=n(27723),c=n(75063),s=n(16784),d=n(75093),p=n(15544),u=n(7762),m=n(98589),h=n(42602);const g=(0,l.withDispatch)(e=>{const t=e("eventin/global");return{setShouldRevalidateScheduleList:e=>{t.setRevalidateScheduleList(e),t.invalidateResolution("getScheduleList")}}}),v=(0,l.withSelect)(e=>({shouldRevalidateScheduleList:e("eventin/global").getRevalidateScheduleList()})),f=(0,o.compose)([g,v])(({isLoading:e,setShouldRevalidateScheduleList:t,shouldRevalidateScheduleList:n})=>{const[o,l]=(0,i.useState)({paged:1,per_page:10}),[g,v]=(0,i.useState)([]),{filteredList:f,totalCount:x,loading:y}=(0,m.e)(o,n,t),_=(0,i.useMemo)(()=>({selectedRowKeys:g,onChange:v}),[g]),E=(0,i.useMemo)(()=>({current:o.paged,pageSize:o.per_page,total:x,showSizeChanger:!0,showLessItems:!0,onShowSizeChange:(e,t)=>l(e=>({...e,per_page:t})),onChange:e=>l(t=>({...t,paged:e})),showTotal:(e,t)=>(0,a.createElement)(d.CustomShowTotal,{totalCount:e,range:t,listText:(0,r.__)(" schedules","eventin")})}),[o,x]);return e?(0,a.createElement)(h.f,{className:"eventin-page-wrapper"},(0,a.createElement)(c.A,{active:!0})):(0,a.createElement)(h.f,{className:"eventin-page-wrapper"},(0,a.createElement)("div",{className:"event-list-wrapper"},(0,a.createElement)(u.A,{selectedSchedules:g,setSelectedSchedules:v,setParams:l,filteredList:f}),(0,a.createElement)(s.A,{className:"eventin-data-table",columns:p.A,dataSource:f,loading:y,rowSelection:_,rowKey:e=>e.id,scroll:{x:900},sticky:{offsetHeader:120},pagination:E})))})},42602(e,t,n){n.d(t,{O:()=>l,f:()=>o});var a=n(69815);const o=a.default.div`
	background-color: #f4f6fa;
	padding: 12px 36px;
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
		font-wight: 400;
		padding: 0;
		text-align: left;
	}
`,l=a.default.div`
	padding: 22px 36px;
	background: #fff;
	border-radius: 12px 12px 0 0;
	border-bottom: 1px solid #ddd;

	.ant-form-item {
		margin-bottom: 0;
	}
	.ant-select-single {
		height: 36px;
		width: 120px !important;
	}

	.ant-picker {
		height: 36px;
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