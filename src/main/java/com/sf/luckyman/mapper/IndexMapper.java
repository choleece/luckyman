package com.sf.luckyman.mapper;

import com.sf.luckyman.entity.Lottery;
import com.sf.luckyman.entity.Signer;

import java.util.List;

/**
 * Created by choleece on 2018/10/23.
 */
public interface IndexMapper {

    int insertSigner(Signer signer);

    List<Lottery> listSigner();
}
