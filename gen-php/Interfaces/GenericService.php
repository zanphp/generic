<?php
/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * THIS IS MODIFIED FOR YOUZAN, ANY PROBLEM PLS CONTACT lanhu(zhangyuanhao@qima-inc.com)
 * qingjiao(qingjiao@qima-inc.com) & xiao'er(shiyu@qima-inc.com)
 * @generated
 */

namespace Com\Youzan\Test\Interfaces;

interface GenericService {
  /**
   * @param \Com\Youzan\Test\Service\GenericRequest $request
   * @return \Com\Youzan\Test\Service\GenericResponse
   * @throws \Com\Youzan\Test\Service\GenericException
   */
  public function invoke(\Com\Youzan\Test\Service\GenericRequest $request);
}

