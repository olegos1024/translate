@extends('layout.index')

@section('content')
    <div class="content-wrapper clearfix">
        <div class="row rowBoxWhiteSimple">

{{--            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">--}}
            <section class="content-header">
                <h4>
                    <strong>{{__("document")}}:</strong>
                    <input type="hidden" id="current_stage" value="1">
                </h4>
                <button id = "analitics" type="button">{{__('analitics')}}</button>

                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i>{{__("analitics")}}</a></li>
                </ol>
{{--            </div>--}}
</section>

            <form id = 'formx' method="POST" action="#">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row grayBox">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="insederBox">
                            <div class="header_panel">{{__("documentcard")}}</div>
                            <div class="insederBox_container">
                                <div class="form-group">
                                    <label>{{__("documentsubject")}} <sup class="required">*</sup></label>
                                    <input class="form-control" name="document_theme" id="document_theme" required>
                                </div>

                                <div class="form-group">
                                    <label>{{__("date")}}{{__("completion")}} <sup class="required">*</sup></label>
                                    <input class="form-control document_dateassign" name="document_dateassign"
                                           id="document_dateassign" required readonly>
                                </div>

                                <div class="form-group clearfix">
                                    <label>{{__("documenttype")}}</label>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="radio" value="akt" name="document_subtype"
                                                   id="akt" checked>
                                            <label for="akt">{{__("act")}}</label>

                                            <input type="radio" value="dog" name="document_subtype"
                                                   id="dog">
                                            <label for="dog">{{__("contract")}}</label>
                                        </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <label>{{__("partner")}}</label>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                <div class="form-group">
                                    <select class="form-control selectpicker-search" name="document_partner"
                                            id="document_partner">
                                            <option value="0">{{__("notdefine")}}</option>
                                            <option value="1">{{__("base")}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                <div class="form-group">
                                    <button type="button" id="btnAddPartners" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{__("partnercreator")}}</label>
                            <select class="form-control selectpicker-search" name="document_department"
                                    id="document_department">
                                    <option value="0">{{__("notdefine")}}</option>
                                    <option value="1">{{__("branch")}}</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{__("documentimportance")}}</label>
                            <div class="form-group">
                                <input type="radio" value="0" name="document_important" id="document_important_0" checked>
                                <label for="document_important_0">{{__("ordinary")}}</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" value="1" name="document_important" id="document_important_1">
                                <label for="document_important_1">{{__("important")}}</label>
                            </div>
                        </div>
                    </div>


                    {{-- ASSIGNED USERS --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row grayBox">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="insederBox">
                                    <div class="header_panel">{{__("workflow")}}</div>
                                    <div class="insederBox_container">
                                        <div class="form-group clearfix list_of_assigned">


                                        </div>
                                        <div class="form-group clearfix">
                                            <button type="button" class="btn btn-sm btn-success addUser pull-right"><i
                                                    class="fa fa-plus"></i> {{__("makeresponsible")}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- FILES LINKS --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="insederBox">
                            <div class="header_panel">{{__("files")}}</div>
                            <div class="insederBox_container">

                                <div class="form-group list_of_files">

                                </div>

                                <div class="form-group clearfix">
                                    <div class="btn btn-warning btn-file form-control rowBoxMarginTop15 btnFileShort pull-right">
                                        <i class="fa fa-paperclip"></i>{{__("attachfiles")}} &nbsp;
                                        <input type="file" name="files[]" id="uploadFile" multiple="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- DOCUMENT LINKS --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="insederBox">
                            <div class="header_panel">{{__("links")}}</div>
                            <div class="insederBox_container">
                                <div class="form-group">
                                    <div class="linked_documents_list">

                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <button type="button" class="btn btn-success pull-right btnFileShort addDocument">
                                        {{__("attachlinks")}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- COMMENT --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row grayBox">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="insederBox">
                            <div class="header_panel">{{__("comments")}}</div>
                            <div class="insederBox_container">
                                <div class="form-group">
                                    <label>{{__("leavecomments")}}</label>
                                    <textarea class="form-control document_comment" id="document_comment"
                                              name="document_comment"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- ACTION PANEL --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row grayBox">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="insederBox">
                            <div class="header_panel">{{__("documentaction")}}</div>
                            <div class="insederBox_container">
                                <div class="form-group  clearfix">
                                    <div class="pull-right clearfix">
                                        <button type="button" id="make_draft" class="btn btn-sm btn-warning">{{__("draft")}}</button>
                                        <button type="button" id="make_document" class="btn btn-sm btn-success">{{__("sign")}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
    <script>
        document.getElementById("analitics").onclick = () => location.href="/";
    </script>

@endsection




